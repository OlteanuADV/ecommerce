@extends('main')
@section('content')
<section class="padding-y bg-light">
    <div class="container">
       <div class="row gy-4">
          <aside class="col-lg-4 col-md-6"></aside>
          <aside class="col-lg-4 col-md-6">
             <div class="card">
                <div class="card-body">
                   <h4 class="mb-4">Sign in</h4>
                   <form>
                        {{-- <div class="d-flex gap-2">  --}}
                            <a href="javascript:facebookLogin()" class="d-flex align-items-center btn btn-primary w-100"> 
                                <i class="fab fa-facebook"></i> Sign in with Facebook 
                            </a> 
                            <hr>
                            <a href="javascript:googleLogin()"  class="d-flex align-items-center btn btn-danger w-100"> 
                                <i class="fab fa-google-plus-g"></i> Sign in with Google
                            </a> 
                        {{-- </div> --}}
                        {{-- <p class="text-divider my-4"> Or login with username </p>
                        <div class="mb-3"> <input type="text" class="form-control" placeholder="Username"> </div>
                        <div class="mb-3 input-group"> <input type="password" class="form-control" placeholder="Password"> <button type="button" class="btn btn-light"> <i class="text-muted fa fa-eye"></i> </button> </div>
                        <div class="mb-3"> <label class="form-check"> <input class="form-check-input" type="checkbox" value="" checked=""> <span class="form-check-label"> Remember </span> </label> </div>
                        <div class="mb-4"> <button class="btn w-100 btn-primary" type="button"> Sign in </button> </div>
                        <p class="mb-1 text-center">Don't have an account? <a href="#">Sign Up</a></p> --}}
                   </form>
                </div>
             </div>
          </aside>
          <aside class="col-lg-4"></aside>
       </div>
       <br><br>
    </div>  
 </section>
@endsection
@section('javascript')
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/ro_RO/sdk.js#xfbml=1&version=v13.0&appId=677979423438686&autoLogAppEvents=1" nonce="2p7Davuj"></script>
<script>
window.fbAsyncInit = function() {
    FB.init({
        appId      : '{{ env('FACEBOOK_APP_ID') }}',
        cookie     : true,
        xfbml      : true,
        version    : 'v13.0'
    });
    FB.AppEvents.logPageView();              
};
         
(function(d, s, id){
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) {return;}
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<script src="https://apis.google.com/js/platform.js" async defer></script>
<script>
    function googleLogin(googleUser)
    {
        console.log("googleLogin");
        gapi.load('auth2', function() {
            gapi.auth2.init({
                client_id: "{{ env('GOOGLE_APP_ID') }}",
            }).then(function(auth2) {
                console.log( "signed in: " + auth2.isSignedIn.get() );
                auth2.signIn();
                auth2.currentUser.listen(function(googleUser) {
                    if (googleUser) {
                        var id_token = googleUser.getAuthResponse().id_token;
                        console.log(id_token);
                        $.get("{{ url('/api/login/google') }}/" + id_token, function(data){
                            window.location = "{{ url('/') }}";
                        });
                    }
                });
            });
        });
    }
    function facebookLogin()
    {
        FB.login(function(response) {
            if(response.status === "connected")
            {
                console.log(response.authResponse);
                let id_token = response.authResponse.accessToken;
                console.log(id_token);
                $.ajax({
                    method: "GET",
                    url: "{{ url('/api/login/facebook') }}/" + id_token,
                }).done(function( data ) {
                    window.location = "{{ url('/') }}"; 
                });
            }
        }, {scope: 'public_profile,email,user_birthday,user_gender'});
    }
</script>
@endsection