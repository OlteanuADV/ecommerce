var finished_text = true;
var search_list = "";
var products = [];
var started = false;
var numbers = {
    "one": 1,
    "two": 2,
    "three": 3,
    "four": 4,
    "five": 5,
    "six": 6,
    "seven": 7,
    "eight": 8,
    "nine": 9,
    "ten": 10

};
var cart = false;

var questions = {
    "search": {
        description: "Search for products in shop",
        syntax: "[product name]",
        handle: (spoken_text) => {
            if (started == true && products.length == 0) {
                console.log(spoken_text);
                products = [];
                //request to server to get products based on search_list
                $.ajax({
                    method: "POST",
                    url: _PAGE_URL + "/api/speech/search",
                    data: {
                        search: spoken_text,
                        _token: _token
                    }
                }).done(function( data ) {
                    products = data;
                    console.log("found", products);
                    if(products.length > 0)
                        speack("I've found "+products.length+" results based on your criteria. Would you like to hear about them?");
                    else
                        speack("I've found "+products.length+" results based on your criteria. Search something else, please!");
                });
            }
        }
    },
    "yes": {
        description: "",
        syntax: "idk for now",
        handle: (spoken_text) => {
            if (started == true && products.length > 0) {
                let text = "";
                products.forEach(function(item, index) {
                    text += "Number "+ (parseInt(index)+1) + ". ! . ! . !";
                    text += item.title + ". ! . ! . !"; 
                });
                speack(text + ". ! . ! . ! What result number do you want hear more about?Usage: number and product number.. ! . ! . !  If you want to add to cart, tell me.Usage: add to cart and product number");
                // speack("What result number do you want hear more about?");
            } 
        }
    },
    "no": {
        description: "",
        syntax: "idk for now",
        handle: (spoken_text) => {
            if(started == true && products.length > 0)
            {
                //if he said no
                products = [];
                speack("Ok, what do you want to search?");
            }
        }
    },
    "number": {
        description: "number of result you want to hear more about",
        syntax: "product number",
        handle: (spoken_text) => {
            if(started == true && products.length > 0 && cart === false)
            {
                let number = spoken_text.split(" ")[1];
                
                if(products[number-1] == undefined)
                    speack(products[numbers[number]-1].title + " " + products[numbers[number]-1].description);
                else
                    speack(products[number-1].title + " " + products[number-1].description);
            }
            if(started == true && products.length > 0 && cart === true)
            {
                let number = spoken_text.split(" ")[1];
                let product = null;

                if(products[number-1] == undefined)
                    product = products[numbers[number]-1];
                else
                    product = products[number-1];
                speack("You added "+product.title+" in your cart.");
                buy = false;
            }
        }
    },
    "cart": {
        description: "number of result you want to hear more about",
        syntax: "product number",
        handle: (spoken_text) => {
            cart = true;
            speack("What number do you want to add to cart?");
        }
    },
    "checkout": {
        description: "",
        syntax: "",
        handle: (spoken_text) => {
            
            speack("Your order is finished, you will be contacted on the mobile phone by one of our operator.");
        }
    }
};









if ("webkitSpeechRecognition" in window) {
    let speechRecognition = new webkitSpeechRecognition();
    let final_transcript = "";
    speechRecognition.continuous = true;
    speechRecognition.interimResults = true;
    speechRecognition.lang = "en_EN";

    speechRecognition.onstart = () => {

    };
    speechRecognition.onerror = () => {
        console.log("Speech Recognition Error");
    };
    speechRecognition.onend = () => {
        console.log("Speech Recognition Ended");
    };

    speechRecognition.onresult = (event) => {
        let interim_transcript = "";
        for (let i = event.resultIndex; i < event.results.length; ++i) {
            if (event.results[i].isFinal) {
                final_transcript += event.results[i][0].transcript;
            } else {
                interim_transcript += event.results[i][0].transcript;
            }
        }

        $('#start').text(interim_transcript);

        var question_keys = final_transcript.split(" ");
        question_keys.forEach(function(item) {
            if(questions[item] !== undefined)
            {
                questions[item].handle(final_transcript.split(item)[1]);
            }
        })
        final_transcript = "";
    };
    speechRecognition.start();

    document.querySelector("#start").onclick = () => {
        speack("Hello, i am your virtual assistant. Usage: search product");
        started = true;
    };  

    function speack(text) {
        speechRecognition.stop();
        var msg = new SpeechSynthesisUtterance(text);
        window.speechSynthesis.speak(msg);

        msg.addEventListener('end', function(event) {
            speechRecognition.start();
        });
    }
} else {
    console.log("Speech Recognition Not Available");
}