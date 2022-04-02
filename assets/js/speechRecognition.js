var finished_text = true;
var search_list = "";
var products = [];











if ("webkitSpeechRecognition" in window) {
    let speechRecognition = new webkitSpeechRecognition();
    let final_transcript = "";
    let started = false;
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

        if (final_transcript.includes('search') && started == true && products.length == 0) {
            console.log(interim_transcript);

            let search_result = [];
            search_list = '';
            search_list = final_transcript.split("search");
            search_list = search_list[1];
            products = [];
            //request to server to get products based on search_list
            $.ajax({
                method: "POST",
                url: _PAGE_URL + "/api/speech/search",
                data: {
                    search: search_list,
                    _token: _token
                }
            }).done(function( data ) {
                products = data;
                console.log("found", products);
                if(products.length > 0)
                    speak("I've found "+products.length+" results based on your criteria. Would you like to hear about them?");
                else
                    speak("I've found "+products.length+" results based on your criteria. Search something else, please!");
            });
            
            // for (i = 0; i < product_list.length; i++)
            //     if (search_list[1].includes(product_list[i]))
            //         search_result.push(product_list[i]);
            // console.log(search_result);
            final_transcript = '';
        }

        //if products found and said yes ...
        //if he said yes
        if (final_transcript.includes('yes') && started == true && products.length > 0) {
            products.forEach(function(item, index) {
                console.log(item);
            });
            final_transcript = '';
        } 

        if(final_transcript.includes('no') && started == true && products.length > 0)
        {
            //if he said no
            products = [];
            speak("Ok, what do you want to search?");
            final_transcript = '';
        }

    };
    speechRecognition.start();

    document.querySelector("#start").onclick = () => {
        speak("Hello, i am your virtual assistant. Usage: search product");
        started = true;
    };  

    function speak(text) {
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