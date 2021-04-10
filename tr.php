<style>
    #playpausebtn{
        position: relative;
        left: 600px;
        top: -50px;
        border-radius: 50px;
        background-color: skyblue;
        padding-left: 10px;
        padding-right: 10px;
    }
</style>
<div id="google_translate_element"></div>

<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  <script type="text/javascript">
    function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
  </script>
<audio id="audio" src="audio_48f4588534.mp3" autoplay loop></audio>
<button id="playpausebtn" onclick="playpause()">Pause &#9208;</button>
<script>
    var audio = document.getElementById('audio');
    var playpausebtn = document.getElementById('playpausebtn');
    var count = 1;
    function playpause(){
        if(count==0){
           count = 1;
            audio.play();
            playpausebtn.innerHTML = "Pause &#9208";
        }else{
            count=0;
            audio.pause();
            playpausebtn.innerHTML = "Play music &#9658";
        }
    }
</script>