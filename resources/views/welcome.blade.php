<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    @charset "UTF-8";
    /*
      Theme Name: eStartup
      Theme URL: https://bootstrapmade.com/estartup-bootstrap-landing-page-template/
      Author: BootstrapMade.com
      License: https://bootstrapmade.com/license/
    */
    /*--------------------------------------------------------------
    # General
    --------------------------------------------------------------*/
    body {
        background-color: #fff;
        color: #333;
    }

    h1, h2, h3, h4, h5, h6 {
        margin: 0;
    }

    h2 {
        color: #000;
        font-weight: 600;
    }

    h4 {
        color: #000;
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 2px;
        text-transform: uppercase;
        line-height: 2;
    }

    h5 {
        color: #626262;
        font-size: 14px;
        font-weight: 500;
    }

    a {
        letter-spacing: 2px;
        text-decoration: none;
    }

    ul {
        letter-spacing: 1px;
    }

    li {
        color: #626262;
        font-size: 13px;
        font-weight: 400;
        letter-spacing: 2px;
        line-height: 30px;
        text-transform: capitalize;
    }

    p {
        color: #505050;
        font-size: 14px;
        font-weight: 300;
        letter-spacing: 0.5px;
        line-height: 2;
        margin-bottom: 20px;
    }

    span {
        letter-spacing: 1px;
    }

    .img-fluid {
        height: 60px;
        margin-bottom: 30px;
        width: 60px;
    }

    .container-full {
        padding-left: 0;
        padding-right: 0;
    }

    .btn {
        border: 1px solid #fff;
        border-radius: 50px;
        color: #fff;
        font-size: 11px;
        font-weight: 600;
        padding: 15px 40px;
        text-transform: uppercase;
        -moz-transition: all 0.5s ease-in-out 0s;
        -ms-transition: all 0.5s ease-in-out 0s;
        -o-transition: all 0.5s ease-in-out 0s;
        -webkit-transition: all 0.5s ease-in-out 0s;
        transition: all 0.5s ease-in-out 0s;
    }

    .btn-default:hover {
        color: #fff;
        background-color: #e6e6e6;
        border-color: #adadad;
    }

    .fa {
        font-size: 13px;
    }

    /* Back to top button */
    .back-to-top {
        position: fixed;
        display: none;
        background: #71c55d;
        display: inline-block;
        line-height: 1;
        color: #fff;
        padding: 7px 12px 13px 12px;
        font-size: 16px;
        border-radius: 2px;
        right: 15px;
        bottom: 15px;
        transition: background 0.5s;
    }

    @media (max-width: 768px) {
        .back-to-top {
            bottom: 15px;
        }
    }

    .back-to-top:focus {
        background: #71c55d;
        color: #fff;
        outline: none;
    }

    .back-to-top:hover {
        background: #55b03f;
        color: #fff;
    }

    /*--------------------------------------------------------------
    # Header
    --------------------------------------------------------------*/
    #header {
        background: #fff;
        position: fixed;
        left: 0;
        top: 0;
        right: 0;
        height: 48px;
        z-index: 3;
        transition: all 0.5s ease;
    }

    #header #logo {
        padding: 6px 0 0 0;
    }

    #header #logo h1 {
        color: #505050;
        font-family: "Philosopher", sans-serif;
        font-size: 26px;
        font-weight: 500;
        letter-spacing: 1px;
        margin: 0;
    }

    #header #logo h1 a {
        color: #555;
        line-height: 1;
        display: inline-block;
        text-decoration: none;
    }

    #header #logo h1 a span {
        color: #71c55d;
    }

    #header #logo img {
        padding: 0;
        margin: 0;
    }

    .scroll-header {
        background: #fff;
        box-shadow: 0 3px 7px rgba(0, 0, 0, 0.1);
    }

    /*--------------------------------------------------------------
    # Hero Section
    --------------------------------------------------------------*/
    #hero {
        width: 100%;
        height: calc(100vh - 40px);
        background: url(../img/hero-bg.png) center bottom no-repeat;
        background-size: 100%;
        position: relative;
        margin-top: 40px;
    }

    @media (min-width: 1025px) {
        #hero {
            background-attachment: fixed;
        }
    }

    #hero .hero-container {
        position: absolute;
        bottom: 0;
        top: 0;
        left: 0;
        right: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        text-align: center;
    }

    #hero h1 {
        margin: 0 0 10px 0;
        font-size: 48px;
        font-weight: 700;
        line-height: 56px;
        font-family: "Philosopher", sans-serif;
        color: #71c55d;
    }

    @media (max-width: 768px) {
        #hero h1 {
            font-size: 28px;
            line-height: 36px;
        }
    }

    #hero h2 {
        color: #777;
        margin-bottom: 30px;
        font-size: 20px;
        font-family: "Roboto", sans-serif;
        font-weight: 300;
    }

    @media (max-width: 768px) {
        #hero h2 {
            font-size: 18px;
            line-height: 24px;
            margin-bottom: 30px;
        }
    }

    #hero img {
        max-width: 95%;
        margin-bottom: 30px;
    }

    #hero .btn-get-started {
        font-family: "Roboto", sans-serif;
        text-transform: uppercase;
        font-weight: 400;
        font-size: 13px;
        letter-spacing: 1px;
        display: inline-block;
        padding: 11px 36px;
        border-radius: 50px;
        transition: 0.5s;
        margin-bottom: 30px;
        border: 2px solid #71c55d;
        background: #fff;
        color: #71c55d;
        text-decoration: none;
    }

    #hero .btn-get-started:hover {
        background: #71c55d;
        color: #fff;
    }

    #hero .btns a {
        color: #555;
        font-size: 11px;
        font-weight: 600;
        text-transform: uppercase;
        margin: 4px 20px;
        text-decoration: none;
        transition: 0.3s;
    }

    @media (max-width: 575px) {
        #hero .btns a {
            margin: 4px 8px;
        }
    }

    #hero .btns a:hover {
        color: #71c55d;
    }

    /*--------------------------------------------------------------
    # Navigation Menu
    --------------------------------------------------------------*/
    /* Nav Menu Essentials */
    .nav-menu, .nav-menu * {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .nav-menu ul {
        position: absolute;
        display: none;
        top: 100%;
        left: 0;
        z-index: 99;
    }

    .nav-menu li {
        position: relative;
        white-space: nowrap;
    }

    .nav-menu > li {
        float: left;
    }

    .nav-menu li:hover > ul,
    .nav-menu li.sfHover > ul {
        display: block;
    }

    .nav-menu ul ul {
        top: 0;
        left: 100%;
    }

    .nav-menu ul li {
        min-width: 180px;
    }

    /* Nav Menu Arrows */
    .sf-arrows .sf-with-ul {
        padding-right: 22px;
    }

    .sf-arrows .sf-with-ul:after {
        content: "\f107";
        position: absolute;
        right: 8px;
        margin-top: 1px;
        font-family: FontAwesome;
        font-style: normal;
        font-weight: normal;
    }

    .sf-arrows ul .sf-with-ul:after {
        content: "\f105";
    }

    /* Nav Meu Container */
    #nav-menu-container {
        float: right;
        margin: 0 0 0 0;
    }

    @media (max-width: 1024px) {
        #nav-menu-container {
            display: none;
        }
    }

    /* Nav Meu Styling */
    .nav-menu a {
        padding: 8px 8px;
        text-decoration: none;
        display: inline-block;
        color: #555;
        font-family: "Roboto", sans-serif;
        font-weight: 400;
        font-size: 14px;
        outline: none;
        letter-spacing: 0;
        transition: 0.3s;
    }

    .nav-menu li:hover > a, .nav-menu > .menu-active > a {
        color: #71c55d;
    }

    .nav-menu > li {
        margin-left: 10px;
    }

    .nav-menu ul {
        margin: 0;
        padding: 10px;
        box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
        background: #fff;
    }

    .nav-menu ul li {
        transition: 0.3s;
    }

    .nav-menu ul li a {
        padding: 5px 10px;
        color: #333;
        transition: 0.3s;
        display: block;
        font-size: 14px;
        text-transform: none;
    }

    .nav-menu ul li:hover > a {
        color: #71c55d;
    }

    .nav-menu ul ul {
        margin: 0;
    }

    /* Mobile Nav Toggle */
    #mobile-nav-toggle {
        position: fixed;
        right: 0;
        top: 0;
        z-index: 999;
        margin: 4px 20px 0 0;
        border: 0;
        background: none;
        font-size: 24px;
        display: none;
        transition: all 0.4s;
        outline: none;
        cursor: pointer;
    }

    #mobile-nav-toggle i {
        color: #555;
        font-size: 24px;
    }

    @media (max-width: 1024px) {
        #mobile-nav-toggle {
            display: inline;
        }
    }

    /* Mobile Nav Styling */
    #mobile-nav {
        position: fixed;
        top: 0;
        padding-top: 18px;
        bottom: 0;
        z-index: 998;
        background: rgba(52, 59, 64, 0.9);
        left: -260px;
        width: 260px;
        overflow-y: auto;
        transition: 0.4s;
    }

    #mobile-nav ul {
        padding: 0;
        margin: 0;
        list-style: none;
    }

    #mobile-nav ul li {
        position: relative;
    }

    #mobile-nav ul li a {
        color: #fff;
        font-size: 14px;
        overflow: hidden;
        padding: 6px 22px 6px 15px;
        position: relative;
        text-decoration: none;
        width: 100%;
        display: block;
        outline: none;
        letter-spacing: 0;
    }

    #mobile-nav ul li a:hover {
        color: #fff;
    }

    #mobile-nav ul li li {
        padding-left: 30px;
    }

    #mobile-nav ul .menu-has-children i {
        position: absolute;
        right: 0;
        z-index: 99;
        padding: 15px;
        cursor: pointer;
        color: #fff;
    }

    #mobile-nav ul .menu-has-children i.fa-chevron-up {
        color: #71c55d;
    }

    #mobile-nav ul .menu-item-active {
        color: #71c55d;
    }

    #mobile-body-overly {
        width: 100%;
        height: 100%;
        z-index: 997;
        top: 0;
        left: 0;
        position: fixed;
        background: rgba(52, 59, 64, 0.9);
        display: none;
    }

    /* Mobile Nav body classes */
    body.mobile-nav-active {
        overflow: hidden;
    }

    body.mobile-nav-active #mobile-nav {
        left: 0;
    }

    body.mobile-nav-active #mobile-nav-toggle i {
        color: #fff;
    }

    /*--------------------------------------------------------------
    # Sections
    --------------------------------------------------------------*/
    .padd-section {
        padding-bottom: 80px;
        padding-top: 80px;
    }

    @media (max-width: 992px) {
        .padd-section {
            padding-top: 40px;
            padding-bottom: 40px;
        }
    }

    .section-title {
        margin-bottom: 80px;
    }

    @media (max-width: 992px) {
        .section-title {
            margin-bottom: 40px;
        }
    }

    .section-title h2 {
        font-family: "Roboto", sans-serif;
        font-size: 45px;
        font-weight: 100;
        letter-spacing: 2px;
        margin-bottom: 20px;
        text-transform: capitalize;
    }

    .section-title .separator {
        margin: 0;
    }

    .separator {
        color: #626262;
        font-family: "Roboto", sans-serif;
        font-size: 15px;
        font-weight: 300;
        margin-bottom: 30px;
        text-transform: capitalize;
    }

    /* Get Started Section
    --------------------------------*/
    #get-started {
        display: inline-block;
        height: 100%;
        width: 100%;
    }

    #get-started .feature-block {
        background: #fff none repeat scroll 0 0;
        padding: 30px 20px;
        transition: all 0.5s ease-in-out 0s;
    }

    @media (max-width: 991px) {
        #get-started .feature-block {
            margin-bottom: 30px;
        }
    }

    #get-started .feature-block:hover {
        box-shadow: 0 0 35px rgba(0, 0, 0, 0.1);
        transition: all 0.5s ease-in-out 0s;
    }

    #get-started .feature-block h4 {
        margin-bottom: 20px;
    }

    #get-started .feature-block p {
        margin-bottom: 20px;
    }

    #get-started .feature-block a {
        color: #505050;
        font-size: 12px;
        font-weight: 600;
        text-decoration: none;
        text-transform: capitalize;
        transition: 0.3s;
    }

    #get-started .feature-block a:hover {
        color: #71c55d;
    }

    /* About Us Section
    --------------------------------*/
    #about-us img {
        max-width: 100%;
    }

    #about-us .about-content {
        padding-top: 60px;
    }

    #about-us .about-content h2 {
        color: #252525;
        font-family: "roboto";
        font-size: 39px;
        font-weight: 100;
        letter-spacing: 2px;
        margin-bottom: 20px;
        text-transform: capitalize;
    }

    #about-us .about-content span {
        font-weight: 700;
        padding-right: 10px;
        text-transform: uppercase;
    }

    #about-us .about-content ul li {
        line-height: 36px;
    }

    #about-us .about-content ul li .fa {
        padding-right: 20px;
    }

    /* Features Section
    --------------------------------*/
    #features {
        display: inline-block;
        height: 100%;
        width: 100%;
    }

    #features .feature-block {
        background: #fff none repeat scroll 0 0;
        padding: 30px 20px;
        margin-bottom: 30px;
        transition: all 0.5s ease-in-out 0s;
    }

    #features .feature-block:hover {
        box-shadow: 0 0 35px rgba(0, 0, 0, 0.1);
        transition: all 0.5s ease-in-out 0s;
    }

    #features .feature-block h4 {
        margin-bottom: 20px;
    }

    #features .feature-block p {
        margin-bottom: 0;
    }

    /* Screenshots Section
    --------------------------------*/
    .owl-dot.active > span {
        height: 10px !important;
        width: 10px !important;
    }

    .owl-theme .owl-dots .owl-dot span {
        height: 10px !important;
        width: 10px !important;
    }

    .owl-item img {
        cursor: pointer;
    }

    .owl-stage-outer {
        margin-bottom: 30px;
    }

    .owl-theme .owl-nav {
        display: none;
        margin-top: 10px;
    }

    .owl-theme .owl-dots .owl-dot.active span, .owl-theme .owl-dots .owl-dot:hover span {
        background: #71c55d;
    }

    .owl-theme .owl-dots .owl-dot span {
        background: #ddd;
    }

    /* Video Section
    --------------------------------*/
    #video {
        background: url(../img/video-bg.jpg) center center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 400px;
        overflow: hidden;
    }

    #video .overlay {
        background: rgba(0, 0, 0, 0.85);
        height: 100%;
    }

    #video .overlay .play-btn {
        width: 94px;
        height: 94px;
        background: radial-gradient(#71c55d 50%, rgba(113, 197, 93, 0.15) 52%);
        border-radius: 50%;
        display: block;
        margin: 153px auto 0;
        position: relative;
        overflow: hidden;
    }

    #video .overlay .play-btn::after {
        content: '';
        position: absolute;
        left: 50%;
        top: 50%;
        -webkit-transform: translateX(-40%) translateY(-50%);
        transform: translateX(-40%) translateY(-50%);
        width: 0;
        height: 0;
        border-top: 10px solid transparent;
        border-bottom: 10px solid transparent;
        border-left: 15px solid #fff;
        z-index: 100;
        transition: all 400ms cubic-bezier(0.55, 0.055, 0.675, 0.19);
    }

    #video .overlay .play-btn:before {
        content: '';
        position: absolute;
        width: 120px;
        height: 120px;
        -webkit-animation-delay: 0s;
        animation-delay: 0s;
        -webkit-animation: pulsate1 2s;
        animation: pulsate1 2s;
        -webkit-animation-direction: forwards;
        animation-direction: forwards;
        -webkit-animation-iteration-count: infinite;
        animation-iteration-count: infinite;
        -webkit-animation-timing-function: steps;
        animation-timing-function: steps;
        opacity: 1;
        border-radius: 50%;
        border: 2px solid rgba(255, 255, 255, 0.5);
        top: -15%;
        left: -15%;
        background: rgba(198, 16, 0, 0);
    }

    #video .overlay .play-btn:hover::after {
        border-left: 15px solid #71c55d;
        -webkit-transform: scale(20);
        transform: scale(20);
    }

    #video .overlay .play-btn:hover::before {
        content: '';
        position: absolute;
        left: 50%;
        top: 50%;
        -webkit-transform: translateX(-40%) translateY(-50%);
        transform: translateX(-40%) translateY(-50%);
        width: 0;
        height: 0;
        border: none;
        border-top: 10px solid transparent;
        border-bottom: 10px solid transparent;
        border-left: 15px solid #fff;
        z-index: 200;
        -webkit-animation: none;
        animation: none;
        border-radius: 0;
    }

    @-webkit-keyframes pulsate1 {
        0% {
            -webkit-transform: scale(0.6, 0.6);
            transform: scale(0.6, 0.6);
            opacity: 1;
        }
        100% {
            -webkit-transform: scale(1, 1);
            transform: scale(1, 1);
            opacity: 0;
        }
    }

    @keyframes pulsate1 {
        0% {
            -webkit-transform: scale(0.6, 0.6);
            transform: scale(0.6, 0.6);
            opacity: 1;
        }
        100% {
            -webkit-transform: scale(1, 1);
            transform: scale(1, 1);
            opacity: 0;
        }
    }

    @-webkit-keyframes pulsate2 {
        0% {
            -webkit-transform: scale(0.1, 0.1);
            transform: scale(0.1, 0.1);
            opacity: 1;
        }
        100% {
            -webkit-transform: scale(1, 1);
            transform: scale(1, 1);
            opacity: 0;
        }
    }

    /* Team Section
    --------------------------------*/
    #team .team-block {
        box-shadow: 0 0 35px rgba(0, 0, 0, 0.1);
        height: 254px;
        overflow: hidden;
        position: relative;
        width: 100%;
    }

    @media (max-width: 991px) {
        #team .team-block {
            margin-bottom: 30px;
        }
    }

    #team .team-block img {
        width: 100%;
    }

    #team .team-block .team-content {
        background: #fff none repeat scroll 0 0;
        bottom: 0;
        box-shadow: 0 0 4px 0 rgba(0, 0, 0, 0.2), 0 0 0 0 rgba(0, 0, 0, 0.19);
        bottom: -147px;
        padding: 20px 0;
        position: absolute;
        width: 100%;
        transition: all 0.5s ease-in-out 0s;
    }

    #team .team-block .team-content ul {
        display: block;
        width: 100%;
    }

    #team .team-block .team-content ul li {
        display: inline-block;
    }

    #team .team-block .team-content ul li a {
        color: #626262;
    }

    #team .team-block .team-content ul li a .fa {
        float: left;
        padding-left: 10px;
        padding-right: 10px;
        transition: 0.3s;
    }

    #team .team-block .team-content ul li a .fa:hover {
        color: #71c55d;
    }

    #team .team-block .team-content ul > span {
        display: inline-block;
        font-size: 14px;
        font-weight: 300;
        letter-spacing: 0.5px;
        margin-bottom: 20px;
        text-transform: uppercase;
    }

    #team .team-block:hover .team-content {
        bottom: 0px;
        transition: all 0.5s ease-in-out 0s;
    }

    /* Testimonials Section
    --------------------------------*/
    #testimonials .testimonials-content {
        box-shadow: 0 0 35px rgba(0, 0, 0, 0.1);
        padding: 49px 20px;
    }

    #testimonials .testimonials-content::before {
        color: #71c55d;
        content: "";
        display: inline-block;
        font: 70px/1 FontAwesome;
        position: absolute;
        right: 43px;
        text-align: left;
        top: -29px;
    }

    #testimonials .top-top > h2 {
        font-family: "Roboto" sans-serif;
        font-size: 45px;
        font-weight: 100;
        letter-spacing: 2px;
        margin-bottom: 20px;
        text-transform: capitalize;
    }

    #testimonials .top-top > h4 {
        font: 700 12px Lato, sans-serif;
    }

    #testimonials .top-top span {
        font-size: 12px;
        font-weight: 300;
        margin-left: 26px;
    }

    #testimonials .btm-btm ul li {
        float: left;
        margin-left: 13px;
        border-radius: 50%;
        margin-right: 13px;
        background: #ddd none repeat scroll 0 0;
        border-radius: 50%;
        box-shadow: 0 0 35px rgba(0, 0, 0, 0.1);
        cursor: pointer;
        display: block;
        height: 10px;
        width: 10px;
    }

    #testimonials .btm-btm .active {
        background: #71c55d;
    }

    .carousel-indicators {
        position: relative;
        bottom: 0;
        left: 0;
        bottom: 0 !important;
        z-index: 15;
        width: auto;
        padding-left: 0;
        margin: 30px auto 0 auto;
        margin-right: auto;
        text-align: center;
        list-style: none;
        margin-bottom: 0;
        display: inline-block;
    }

    .carousel-indicators li {
        margin: 0;
    }

    /* Pricing Table Section
    --------------------------------*/
    #pricing .block-pricing {
        background: #fff;
        box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.2), 0 0 4px 0 rgba(0, 0, 0, 0.19);
        display: inline-block;
        position: relative;
        width: 100%;
    }

    @media (max-width: 991px) {
        #pricing .block-pricing {
            margin-bottom: 30px;
        }
    }

    #pricing .block-pricing .table {
        margin-bottom: 0;
        padding: 30px 15px;
        max-width: 100%;
        width: 100%;
    }

    #pricing .block-pricing .table h4 {
        padding-bottom: 30px;
    }

    #pricing .block-pricing h2 {
        margin-bottom: 30px;
    }

    #pricing .block-pricing ul {
        list-style: outside none none;
        margin: 10px auto;
        max-width: 240px;
        padding: 0;
    }

    #pricing .block-pricing ul li {
        border-bottom: 1px solid rgba(153, 153, 153, 0.3);
        padding: 12px 0;
        text-align: center;
    }

    #pricing .block-pricing ul li b {
        color: #3c4857;
    }

    #pricing .block-pricing .table .table_btn a {
        background: #71c55d;
        color: #fff;
        margin: 0;
        display: inline-block;
    }

    #pricing .block-pricing .table .table_btn a:hover {
        background: #55b03f;
    }

    #pricing .block-pricing .table .table_btn a .fa {
        font-size: 13px;
        margin-right: 5px;
    }

    /* Blog Section
    --------------------------------*/
    @media (max-width: 991px) {
        #blog .block-blog {
            margin-bottom: 30px;
        }
    }

    #blog .block-blog img {
        width: 100%;
    }

    #blog .block-blog .content-blog {
        box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.2), 0 0 4px 0 rgba(0, 0, 0, 0.19);
        display: inline-block;
        min-height: 125px;
        padding: 20px 10px;
        width: 100%;
    }

    #blog .block-blog .content-blog h4 {
        line-height: 24px;
        margin-bottom: 20px;
        text-transform: capitalize;
        font-weight: normal;
        letter-spacing: 0;
        font-size: 16px;
    }

    #blog .block-blog .content-blog h4 a {
        color: #555;
        text-decoration: none;
        transition: 0.3s;
    }

    #blog .block-blog .content-blog h4 a:hover {
        color: #71c55d;
    }

    #blog .block-blog .content-blog > span {
        float: left;
        font-size: 12px;
    }

    #blog .block-blog .content-blog a.readmore {
        color: #505050;
        font-size: 12px;
        font-weight: 600;
        text-decoration: none;
        transition: 0.3s;
        letter-spacing: 0;
        text-transform: capitalize;
    }

    #blog .block-blog .content-blog a.readmore:hover {
        color: #71c55d;
    }

    /* Newsletter Section
    --------------------------------*/
    #newsletter {
        background: transparent url(../img/newsletter-bg.jpg) no-repeat center top fixed;
        background-size: cover;
    }

    #newsletter .overlay {
        background: linear-gradient(rgba(255, 255, 255, 0.9) 0%, rgba(255, 255, 255, 0.2) 95%);
        height: 100%;
        width: 100%;
    }

    #newsletter .form-control {
        background-color: transparent;
        border: 1px solid #dddddd;
        border-radius: 0;
        color: #888;
        font-size: 11px;
        font-weight: 600;
        height: 50px;
        text-align: center;
        width: 70%;
        background: #fff;
    }

    @media (max-width: 575px) {
        #newsletter .form-control {
            margin-bottom: 30px;
            width: 100%;
        }
    }

    #newsletter .form-control:focus {
        border-color: #71c55d;
        box-shadow: none;
        outline: 0 none;
    }

    #newsletter .btn {
        background: #71c55d;
        border: 0;
        border-radius: 0;
        height: 50px;
        width: 30%;
        transition: 0.3s;
    }

    @media (max-width: 575px) {
        #newsletter .btn {
            width: 100%;
        }
    }

    #newsletter .btn:hover {
        background: #55b03f;
    }

    #newsletter .btn .fa {
        padding-right: 10px;
    }

    #newsletter ul {
        display: inline-block;
        margin-top: 40px;
        margin-bottom: 0;
    }

    #newsletter ul li {
        background: #71c55d;
        border-radius: 50px;
        float: left;
        height: 35px;
        line-height: 35px;
        margin-left: 10px;
        margin-right: 10px;
        width: 35px;
        transition: 0.3s;
    }

    #newsletter ul li:hover {
        background: #55b03f;
    }

    #newsletter ul li .fa {
        color: #fff;
    }

    /* Contact Section
    --------------------------------*/
    #contact {
        background: #fff;
    }

    #contact .info {
        color: #222;
    }

    #contact .info i {
        font-size: 32px;
        color: #71c55d;
        float: left;
    }

    #contact .info p {
        padding: 0 0 10px 50px;
        margin-bottom: 20px;
        line-height: 22px;
        font-size: 14px;
    }

    #contact .info .email p {
        padding-top: 5px;
    }

    #contact .social-links {
        padding-bottom: 20px;
    }

    #contact .social-links a {
        font-size: 18px;
        display: inline-block;
        background: #71c55d;
        color: #fff;
        line-height: 1;
        padding: 6px 0 8px 0;
        border-radius: 50%;
        text-align: center;
        width: 36px;
        height: 36px;
        transition: 0.3s;
    }

    #contact .social-links a:hover {
        background: #55b03f;
        color: #fff;
    }

    #contact .form #sendmessage {
        color: #71c55d;
        border: 1px solid #71c55d;
        display: none;
        text-align: center;
        padding: 15px;
        font-weight: 600;
        margin-bottom: 15px;
    }

    #contact .form #errormessage {
        color: red;
        display: none;
        border: 1px solid red;
        text-align: center;
        padding: 15px;
        font-weight: 600;
        margin-bottom: 15px;
    }

    #contact .form #sendmessage.show, #contact .form #errormessage.show, #contact .form .show {
        display: block;
    }

    #contact .form .validation {
        color: red;
        display: none;
        margin: 0 0 20px;
        font-weight: 400;
        font-size: 13px;
    }

    #contact .form input, #contact .form textarea {
        border-radius: 0;
        box-shadow: none;
        font-size: 14px;
        padding: 12px 10px;
        line-height: 1;
    }

    #contact .form button[type="submit"] {
        background: #71c55d;
        border: 0;
        padding: 10px 24px;
        color: #fff;
        transition: 0.4s;
    }

    #contact .form button[type="submit"]:hover {
        background: #92d283;
    }

    /*--------------------------------------------------------------
    # Footer
    --------------------------------------------------------------*/
    .footer {
        background: #2a2c30;
        padding-top: 50px;
    }

    .footer .footer-logo .navbar-brand {
        color: #fff;
        display: inline-block;
        float: none;
        font-family: "Philosopher", sans-serif;
        font-size: 24px;
        font-weight: 500;
        height: 100%;
        letter-spacing: 0.2em;
        padding-left: 0;
        padding-top: 0;
    }

    .footer .footer-logo p {
        color: #fff;
        font-size: 12px;
        letter-spacing: 1px;
    }

    .footer .list-menu > h4 {
        color: #fff;
        padding-bottom: 20px;
    }

    .footer .list-menu ul li a {
        color: #fff;
        font-size: 12px;
        padding-left: 5px;
        text-decoration: none;
        letter-spacing: 0;
    }

    .footer .copyrights {
        background: #fff;
        margin-top: 50px;
        text-align: center;
        padding: 25px;
    }

    .footer .copyrights p, .footer .copyrights .credits {
        margin: 0;
        padding: 0;
        font-family: "Open Sans", sans-serif;
        font-weight: normal;
        font-size: 14px;
        letter-spacing: 0;
    }

    .footer .copyrights p a, .footer .copyrights .credits a {
        letter-spacing: 0;
        color: #71c55d;
    }
    .img{
        border-radius: 20px;
    }

</style>
<body>
<section id="hero" class="wow fadeIn">
    <div class="hero-container">
        <h1>Welcome to Todo</h1>
        <h2>Make your daily plans with us &amp; more...</h2>
        <img class="img" src="https://imageio.forbes.com/specials-images/dam/imageserve/1092571024/960x0.jpg?height=474&width=711&fit=bounds" alt="Hero">
        <a href="{{ route('login') }}" class="btn-get-started scrollto">Login</a>
    </div>
</section><!-- #hero -->
</body>
</html>
