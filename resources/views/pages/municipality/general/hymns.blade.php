@extends('layouts/app')

@section('content')
<style type="text/css">
    audio{
      max-width: 70%;
    }
</style>
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-lg-12 text-center">
            <center>
                <h3 class="mb-5 mt-1 card-header text-white text-center mx-auto d-block" style="min-width: 50% !important;">HYMNS</h3>
            </center>

        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 text-center mb-3 mb-md-0">
            <h3 class="mb-3 font-weight-bold text-primary">La Union Hymn</h3>
            <audio controls="" class="my-4">
                <source src="{{asset('mp3/launion.mp3')}}" type="audio/mpeg">
            </audio>
            <p class="mb-3"><em>Composer – Primitico Acosta</em><p>

            <p class="mb-0 ">Where is that place the one could find refuge
            <p class="mb-0 ">Through wooded hills and verdant rolling fields
            <p class="mb-0 ">Where is the place with bubbling brooks and rivers,
            <p class="mb-0 ">Where is that place,
            <p class="mb-3 ">Oh, where is that place?

            <p class="mb-0 ">Where can one find birds singing all the day
            <p class="mb-0 ">Where do the waves go on so silvery,
            <p class="mb-0 ">Where does the sunset spread its golden beauty?
            <p class="mb-0 ">Where is that place,
            <p class="mb-3 ">La Union, my beloved.

            <p class="mb-0 ">Refrain:
            <p class="mb-0 ">God, bless the people of fair La Union
            <p class="mb-0 ">Keep us from harm and fill our hearts with love;
            <p class="mb-0 ">Let no one seek to break the cord that binds us
            <p class="mb-0 ">God, bless La Union
            <p class="mb-3 ">My own home.

            <p class="mb-0 ">Bridge:
            <p class="mb-0 ">God, bless La Union
            <p class="mb-3 ">Our own home!. . . . . .
        </div>


            <div class="col-lg-6 text-center">
            <h3 class="mb-3 font-weight-bold text-primary">Bagulin Hymn</h3>
            <audio controls="" class="my-4">
                <source src="{{asset('mp3/bagulin.mp3')}}" type="audio/mpeg">
            </audio>
            <p class="mb-0"><em>Lyrics – Dr. Rogelio E. Tangalin Sr.</em></p>
            <p class="mb-3"><em>Music – Renan N. Flores</em><p>

            <p class="mb-0">Bagulin, ili a nasadia
            <p class="mb-0">Ili a nagtaudan puli a nakired
            <p class="mb-0">Natubay iti anus ken ling-et
            <p class="mb-3">Nangted sadia, sudi ken ngayed

            <p class="mb-0">Bagulin, ili a dinto kalipatan
            <p class="mb-0">Ili a pasantaken ken pakatayan
            <p class="mb-0">Napnuan ngayed ken rimrimat
            <p class="mb-3">Inkam daniwan ken kantaan

            <p class="mb-0">Bagulin, sika ti taklin mi
            <p class="mb-0">Sika ti amin, sikat’ bagnos
            <p class="mb-0">Libnos karayan ken bambantay
            <p class="mb-3">Isut’ ubbog panagdur-as, panagbiag

            <p class="mb-0">Bagulin, sika ti taklin mi
            <p class="mb-0">Sika ti amin, sikat’ bagnos
            <p class="mb-0">Denggem kanta mi nagtaud kaun-gan
            <p class="mb-3">Ta sadiam, O, Bagulin,

            <p class="mb-0">Ili mi, saknap mi ti tungpal biag
            <p class="mb-0">Ti tungpal biag (2x)
        </div>

    </div>
    </div>
</div>

<script type="text/javascript">
document.addEventListener('play', function(e){
    var audios = document.getElementsByTagName('audio');
    for(var i = 0, len = audios.length; i < len;i++){
        if(audios[i] != e.target){
            audios[i].pause();
            audios[i].currentTime = 0;
        }
    }
}, true);

$('#bagulin,#launion').click(function(){
	$('audio').trigger('pause');
});
</script>
@endsection