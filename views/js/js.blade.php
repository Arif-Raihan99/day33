@extends('master')

@section('title')
    Js
@endsection

@section('body')

{{--    <h1 id="h1"></h1>--}}

{{--    <div id="content"></div>--}}
@include('includes.imageChange');
@include('includes.color-change');

<h6>js page</h6>

    <script>


        // function getFullName(firstName, lastName) {
        //     var fullName = firstName +' '+ lastName;
        //     //var h1 = document.getElementById('h1');
        //     var h1 = document.getElementsByTagName('h1')[0].innerHTML = fullName;
        // }

        // getFullName("Arif", "Raihan");
        //
        // function createDiv(heignt, width, color) {
        //     var div = document.createElement('div');
        //     div.style.height = height+'px';
        //     div.style.width = width+'px';
        //     div.style.backgroundColor = color;
        //     div.style.float = 'left';
        //     div.style.borderRadius = '50%';
        //     div.setAttribute('id', 'div2');
        //
        //     var content = document.getElementById('content');
        //     content.append(div);
        // }
        // createDiv(300, 400, red);

        //createDiv('100px', '200px', 'black');

        // var location = {country: 'BD', city: 'Dhaka', area: 'K.B'};
        //
        // var student = {name: 'Arif', phone: '0177556', email: 'a.com' }
        //
        var students = [
        {name: 'Arif', phone: '0177556', email: 'a.com' },
        {name: 'Asif', phone: '0177556', email: 'a.com' },
        {name: 'Amir', phone: '0177556', email: 'a.com' },
        {name: 'Asad', phone: '0177556', email: 'a.com' },
        {name: 'Alfi', phone: '0177556', email: 'a.com' }
        ];
        for (i in students){
            document.write(students[i].name+' '+students[i].phone+' '+students[i].email+'<br>');
        }


    </script>
@endsection
