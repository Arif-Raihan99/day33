<style>
    .small-image{
        height: 100px;
        width: 100px;
        cursor: pointer;
    }
</style>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="ml-5 mt-5 col-md-8 mx-auto" style="height: 220px; width: 300px">
                    <img src="{{ asset('assets/img/download1.jpg') }}" alt="" id="img" class="img-fluid">
                </div>

                <div class="ml-5 mt-2 mb-5">
                    <img src="{{ asset('assets/img/download1.jpg') }}" alt="" class="small-image mr-2" id="smallImage1" />
                    <img src="{{ asset('assets/img/download2.jpeg') }}" alt="" class="small-image mr-2" id="smallImage2" />
                    <img src="{{ asset('assets/img/download3.webp') }}" alt="" class="small-image mr-2" id="smallImage3" />
                    <img src="{{ asset('assets/img/p4.jpg') }}" alt="" class="small-image mr-2" id="smallImage4" />
                </div>
            </div>
        </div>
    </div>
</section>


<script>
    var img1 = document.getElementById('smallImage1');
    var img2 = document.getElementById('smallImage2');
    var img3 = document.getElementById('smallImage3');
    var img4 = document.getElementById('smallImage4');

    var imgTag = document.getElementById('img');

    img1.onclick = function () {
        imgTag.setAttribute("src", "{{ asset('assets/img/download1.jpg') }}")
    }
    img2.onclick = function () {
        imgTag.setAttribute("src", "{{ asset('assets/img/download2.jpeg') }}")
    }
    img3.onclick = function () {
        imgTag.setAttribute("src", "{{ asset('assets/img/download3.webp') }}")
    }
    img4.onclick = function () {
        imgTag.setAttribute("src", "{{ asset('assets/img/p4.jpg') }}")
    }

</script>
