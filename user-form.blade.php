<div>
    <!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->
     <H1>User-Form Page</H1>

    @if($errors->any())
    @foreach($errors->all() as $error)
    <div style="color: tomato;">
        {{$error}}
    </div>
    @endforeach
    @endif



    <form action="adduser" method="post">
        @csrf
        <input type="text" placeholder="Enter Your Name" name="name" id="input" value="{{old('name')}}" class="{{$errors->first('name')?'input-error':''}}">
        <input type="text" placeholder="Enter Your E-mail" name="email" id="input" value="{{old('email')}}">
        <input type="number" placeholder="Enter Your phone number" name="number" id="input" value="{{old('number')}}">

        <h5>GENDER</h5>
        <input type="radio" id="male" value="male" name="gender">
        <label for="male">MALE</label>
        <input type="radio" id="female" value="female" name="gender">
        <label for="female">FEMALE</label>

        <H5>CITY</H5>
        <select name="city" id="city">
            <option value="#">CITIES</option>
            <option value="BBSR">BBSR</option>
            <option value="CTC">CTC</option>
            <option value="BDK">BDK</option>
            <option value="PURI">PURI</option>
            <option value="RKL">RKL</option>
        </select>

        <h4>AGE</h4>
        <input type="range" name="age" min="18" max="60">
        <BR></BR><button>USER DETAILS</button>
    </form>
</div>
<style>
    #input{
        padding: 10px;
        width: 350px;
        border-color: blue;
        outline: none;
        color: blue;
        display: block;
        border-radius:4px;
        margin-bottom: 10px;
    }
    button{
        height: 45px;
        width: 150px;
        color: blue;
        border-color: blue;
        outline-color: blue;
        cursor:pointer;
    }
    .input-error{
        border: 1px solid red;
        color: red
    }
</style>