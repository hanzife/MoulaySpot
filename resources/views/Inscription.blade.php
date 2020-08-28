<link rel="stylesheet" href="css/Signup.css" />
<title>Inscription</title>

<!-- Header Lyout -->
@extends('layouts.master')
<!-- ------ -->
@section('content')
<div class="sb1-blank-51"></div>

<div class="sb1-container">
    <div class="sb1-sub-container">
        <div><img src="images/logos/logo3.svg" alt="" /></div>
        <div class="sb1-title">Join MoulaySpot</div>
        <div class="sb1-form">
            <form action="">
                <label for="li-id">Full Name</label><br />
                <input type="text" id="li-id" name="" required placeholder="Your Name" /><br />
                <div id="li-id-error" class="sb1-error"></div>
                <div class="sb1-blank-20"></div>

                <label for="li-id">Email</label><br />
                <input type="text" id="li-id" name="" required placeholder="example@domaine.com" /><br />
                <div class="sb1-blank-20"></div>





                <label for="li-pass">Password</label><br />
                <input type="password" id="li-pass" name="" placeholder="••••••••" required /><br />

                <div id="li-pass-error" class="sb1-error"></div>

                <div class="sb1-blank-20"></div>

                <div class="sb1-submit">

                    <button class="sb1-continue" type="submit" value="Submit" name="" id="li-login">
                        Sign up
                    </button>
                </div>
            </form>
        </div>
        <div class="sp1-fancySeperator"></div>
        <div class="sp1-cpmtExist">
            Already have an account yet? <a href="">Log in → </a>
        </div>
    </div>
</div>

<div class="sb1-blank-50"></div>

@endsection

