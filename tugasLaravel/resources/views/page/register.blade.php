@extends('layouts.master')
@section('title')
Buat Account Baru  
@endsection
@section('content')
<h3>Sign Up Form</h3>
<form method="post" action="/welcome">
    @csrf
    <label>First Name :</label><br/>
    <br/>
    <input type="text" name="firstname" /><br/>
    <br/>
    <label>Last Name :</label><br/>
    <br/>
    <input type="text" name="lastname" /><br/>
    <br/>
    <label>Gender :</label><br/>
    <br/>
    <input type="radio" value="1" name="gender"/>Male<br/>
    <input type="radio" value="2" name="gender"/>Female<br/>
    <input type="radio" value="3" name="gender"/>Other<br/>
    <br/>
    <label>Nationality</label><br/>
    <br/>
    <select name="nationality">
        <option value="1">Indonesia</option>
        <option value="2">Inggris</option>
        <option value="3">Rusia</option>
        <option value="4">Japan</option>
        <option value="5">Korea</option>
    </select><br/>
    <br/>
    <label>Language Spoken :</label><br/>
    <br/>
    <input type="checkbox" value="1" name="language"/>Indonesia<br/>
    <input type="checkbox" value="2" name="language"/>English<br/>
    <input type="checkbox" value="3" name="language"/>Other<br/>
    <br/>
    <label>Bio :</label><br/>
    <br/>
    <textarea name="bio" cols="25" rows="10"></textarea>
    <br/>
    <input type="submit" value="Sign up"/> <br/>
    <br/>
    <a href="/">Kembali</a>
</form>
@endsection
