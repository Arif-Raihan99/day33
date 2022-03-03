<h1 id="headingTag" class="text-center my-5">This is header</h1>

<div class="py-5">
    <div class="nav">
        <div class="col-md-6 mx-auto">
            <div class="navbar">
                <li class="nav-item"><a href="" id="colorRed" class="btn btn-danger nav-link mx-3">Red</a></li>
                <li class="nav-item"><a href="" id="colorYellow" class="btn btn-warning nav-link mx-3">Yellow</a></li>
                <li class="nav-item"><a href="" id="colorGreen" class="btn btn-success nav-link mx-3" >Green</a></li>
                <li class="nav-item"><a href="" id="colorBlue" class="btn btn-info nav-link mx-3" >Blue</a></li>
            </div>
            <div class="mt-4 mx-auto"  id="box" style="height: 200px; width: 300px; border: 1px solid black"></div>
        </div>

    </div>
</div>

<div class="box"></div>

<script>
    var colorRed = document.getElementById('colorRed');
    var colorYellow = document.getElementById('colorYellow');
    var colorGreen = document.getElementById('colorGreen');
    var colorBlue = document.getElementById('colorBlue');

    colorRed.onclick = function () {
        event.preventDefault();
        var box = document.getElementById('box');
        box.style.backgroundColor = 'red';
    }
    colorYellow.onclick = function () {
        event.preventDefault();
        var box = document.getElementById('box');
        box.style.backgroundColor = 'yellow';
    }
    colorGreen.onclick = function () {
        event.preventDefault();
        var box = document.getElementById('box');
        box.style.backgroundColor = 'green';
    }
    colorBlue.onclick = function () {
        event.preventDefault();
        var box = document.getElementById('box');
        box.style.backgroundColor = 'blue';
    }

    var heading = document.getElementById('headingTag');
    heading.onclick = function () {
        //alert('Hello BITM');
        heading.innerHTML = 'Hellow BITM';
        heading.style.color = 'yellow';
    }
    heading.onmouseover = function () {
        heading.style.color = 'green';
    }
    heading.onmouseleave = function () {
        heading.style.color = 'black';
    }

</script>
