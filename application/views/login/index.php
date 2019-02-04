<?php
/**
 * Created by PhpStorm.
 * User: MEET
 * Date: 4-2-2019
 * Time: 6:10 PM
 */?>
<style type="text/css">

    @import "bourbon";

    html {
        box-sizing: border-box;
    }
    *, *:before, *:after {
        box-sizing: inherit;
    }

    $red: #f44336;
    $pink: #E91E63;
    $purple: #9C27B0;
    $deep-purple: #673AB7;
    $indigo: #3F51B5;
    $blue: #2196F3;
    $light-blue: #03A9F4;
    $cyan: #00BCD4;
    $teal: #009688;
    $green: #4CAF50;
    $light-green: #8BC34A;
    $lime: #CDDC39;
    $yellow: #FFEB3B;
    $amber: #FFC107;
    $orange: #FF9800;
    $deep-orange: #FF5722;
    $brown: #795548;
    $grey: #9E9E9E;
    $blue-grey: #607D8B;

    $array-color-swatch: (
    "red":       	 $red,
    "pink":      	 $pink,
    "purple":        $purple,
    "deep-purple":   $deep-purple,
    "indigo":        $indigo,
    "blue":          $blue,
    "light-blue":    $light-blue,
    "cyan":          $cyan,
    "teal":          $teal,
    "green":         $green,
    "light-green":   $light-green,
    "lime":          $lime,
    "yellow":        $yellow,
    "amber":         $amber,
    "orange":        $orange,
    "deep-orange":   $deep-orange,
    "brown":         $brown,
    "grey":          $grey,
    "blue-grey":     $blue-grey
    );

    // logmod
$logmod-baseline: 24px;
    $logmod-bg: rgba(#000, 0.2);
    $logmod-zindex: 1;

    .logmod {
        display: block;
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        opacity: 1;
        background: $logmod-bg;
        z-index: $logmod-zindex;
    @include clearfix();

    // .logmod__wrapper
    &__wrapper {
         display: block;
         background: #FFF;
         position: relative;
         max-width: 550px;
         border-radius: 4px;
         box-shadow: 0 0 18px rgba(#000, 0.2);
         margin: ($logmod-baseline * 5) auto;
     }

    // .logmod__close
    &__close {
         display: block;
         position: absolute;
         right: 50%;
         background: url("http://imgh.us/close_white.svg") no-repeat scroll 0% 0% transparent;
         text-indent: 100%;
         white-space: nowrap;
         overflow: hidden;
         cursor: pointer;
         top: -(($logmod-baseline * 2) + $logmod-baseline);
         margin-right: -($logmod-baseline);
         width: $logmod-baseline * 2;
         height: $logmod-baseline * 2;
     }

    // .logmod__container
    &__container {
         overflow: hidden;
         width: 100%;
     @include clearfix;
     }

    // .logmod__tab
    &__tab {
         position: relative;
         width: 100%;
         height: 0;
         overflow: hidden;
         opacity: 0;
         visibility: hidden;

    &-wrapper {
         width: 100%;
         height: auto;
         overflow: hidden;
     }

    &.show {
         opacity: 1;
         height: 100%;
         visibility: visible;
     }
    }

    // .logmod__tabs
    &__tabs {
         list-style: none;
         padding: 0;
         margin: 0;
     @include clearfix;

    li {
    &.current {
    a {
        background: #FFF;
        color: #333;
    }
    }

    a {
        width: 50%;
        position: relative;
        float: left;
        text-align: center;
        background: #D2D8D8;
        line-height: $logmod-baseline * 3;
        height: $logmod-baseline * 3;
        text-decoration: none;
        color: #809191;
        text-transform: uppercase;
        font-weight: 700;
        font-size: 16px;
        cursor: pointer;

    &:focus {
         outline: dotted 1px;
     }
    }
    }
    }

    // .logmod__heading
    &__heading {
         text-align: center;
         padding: ($logmod-baseline / 2) 0 ($logmod-baseline / 2) 0;

    // .logmod__heading-subtitle
    &-subtitle {
         display: block;
         font-weight: 400;
         font-size: 15px;
         color: #888;
         line-height: $logmod-baseline * 2;
     }
    }

    // .logmod__form
    &__form {
         border-top: 1px solid #e5e5e5;
     }

    // .logmod__alter
    &__alter {
         display: block;
         position: relative;
         margin-top: 7px;
     @include clearfix;

    .connect:last-child {
        border-radius: 0 0 4px 4px;
    }
    }
    }

    // [classname] [background-color] [color]
$items: facebook #3b5998 #FFF, googleplus #dd4b39 #FFF;
    .connect {
        overflow: hidden;
        position: relative;
        display: block;
        width: 100%;
        height: $logmod-baseline * 3;
        line-height: $logmod-baseline * 3;
        text-decoration: none;
    @include clearfix;

    &:focus,
    &:hover,
    &:visited {
         color: #FFF;
         text-decoration: none;
     }

    // .connect__icon
    &__icon {
         vertical-align: middle;
         float: left;
         width: 70px;
         text-align: center;
         font-size: 22px;
     }

    // .connect__context
    &__context {
         vertical-align: middle;
         text-align: center;
     }

    @each $item in $items {
    &.#{nth($item, 1)} {
        background: nth($item, 2);
        color: nth($item, 3);

        a {
            color: nth($item, 3);
        }

        .connect__icon {
            background: darken(nth($item, 2), 13%);
        }
    }
    }
    }

    .simform {
        position: relative;

    // .simform__actions
    &__actions {
         padding: 15px;
         font-size: 14px;
     @include clearfix;

    .sumbit {
        height: $logmod-baseline * 2;
        float: right;
        color: #FFF;
        width: 50%;
        font-weight: 700;
        font-size: 16px;
        background: $green;
    @include clearfix;
    @extend .btn;
        margin-top: 7px;
    }

    // .simform__actions-sidetext
    &-sidetext {
         display: inline-block;
         float: left;
         width: 50%;
         padding: 0 10px;
         margin: 9px 0 0 0;
         color: #8C979E;
         text-align: center;
         line-height: $logmod-baseline;
     @include clearfix;
     }
    }
    }

    .sminputs {
        border-bottom: 1px solid #E5E5E5;
    @include clearfix;

    .input {
        display: block;
        position: relative;
        width: 50%;
        height: ($logmod-baseline * 3) - 1;
        padding: 11px $logmod-baseline;
    //padding: ($logmod-baseline / 2) 15px 0 ($logmod-baseline / 1.5);
        border-right: 1px solid #e5e5e5;
        border-bottom: none;
        float: left;
        background-color: #FFF;
        border-radius: 0;
        box-sizing: border-box;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;

    &.active {
         background: #eee;

    .hide-password {
        background: #eee;
    }
    }

    &.full {
         width: 100%;
     }

    label {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        display: block;
        width: 100%;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-weight: 700;
        font-size: 12px;
        cursor: pointer;
        line-height: $logmod-baseline;
    }

    input {
        postion: relative;
        display: inline-block;
        height: $logmod-baseline;
        font-size: 15px;
        line-height: $logmod-baseline * 0.8;
        color: #555;
        border-radius: 4px;
        vertical-align: middle;
        box-shadow: none;
        box-sizing: border-box;
        width: 100%;
        height: auto;
        border: none;
        padding: 0;
        cursor: pointer;
        background-color: transparent;
        color: rgba(75, 89, 102, 0.85);
    }
    }

    .hide-password {
        display: inline-block;
        position: absolute;
        right: 0;
        top: 0;
        padding: 0 15px;
        border-left: 1px solid #e4e4e4;
        font-size: 14px;
        background: #FFF;
        overflow: hidden;
        color: #444;
        cursor: pointer;
        margin-top: $logmod-baseline / 2;
        line-height: ($logmod-baseline * 2);
    }
    }

    html {
        font-size: 16px;
        line-height: 24px;
        font-family: "Lato", sans-serif;
    }

    .btn {
        display: inline-block;
        line-height: normal;
        white-space: nowrap;
        vertical-align: middle;
        text-align: center;
        cursor: pointer;
        box-sizing: border-box;
        border: none;
        outline: none;
        outline-offset: 0;
        font-weight: 400;
        box-shadow: none;
        min-width: 90px;
        padding: 10px 14px;

    &.full {
         width: 100%;
     }

    &.lg {
         min-width: 125px;
         padding: 17px 14px;
         font-size: 22px;
         line-height: 1.3;
     }

    &.sm {
         min-width: 65px;
         padding: 4px 12px;
         font-size: 14px;
     }

    &.xs {
         min-width: 45px;
         padding: 2px 10px;
         font-size: 10px;
         line-height: 1.5;
     }

    &.circle {
         overflow: hidden;
         width: 56px;
         height: 56px;
         min-width: 56px;
         line-height: 1;
         padding: 0;
         border-radius: 50%;

    &.lg {
         width: 78px;
         height: 78px;
         min-width: 78px;
     }

    &.sm {
         width: 40px;
         height: 40px;
         min-width: 40px;
     }

    &.xs {
         width: 30px;
         height: 30px;
         min-width: 30px;
     }
    }

    &:focus,
    &:active,
    &.active,
    &:active:focus,
    &.active:focus {
         outline: 0;
         outline-offset: 0;
         box-shadow: none;
     }

    @each $color-name, $color in $array-color-swatch {
    &.#{$color-name} {
        background: $color;
        color: #FFF;

    &:active,
    &:focus {
         background-color: darken($color, 9%);
     }

    &:hover {
         background-color: darken($color, 5%);
     }
    }
    }
    }

    .special {
        color: $red;
        position: relative;
        text-decoration: none;
        transition: all 0.15s ease-out;

    &:before {
         content: "";
         position: absolute;
         width: 100%;
         height: 1px;
         bottom: 0px;
         left: 0;
         background: #f00;
         visibility: hidden;
         transform: scaleX(0);
         transition: all 0.3s ease-in-out 0s;
     }

    &:hover {
         transition: all 0.15s ease-out;

    &:before {
         visibility: visible;
         transform: scaleX(1);
     }
    }
    }

    #baseline {
        position: fixed;
        top: 0;
        bottom: 0;
        right: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 999999;
        background-image: url(https://basehold.it/i/24);
    }

</style>
<div class="logmod">
    <div class="logmod__wrapper">
        <span class="logmod__close">Close</span>
        <div class="logmod__container">
            <ul class="logmod__tabs">
                <li data-tabtar="lgm-2"><a href="#">Login</a></li>
                <li data-tabtar="lgm-1"><a href="#">Sign Up</a></li>
            </ul>
            <div class="logmod__tab-wrapper">
                <div class="logmod__tab lgm-1">
                    <div class="logmod__heading">
                        <span class="logmod__heading-subtitle">Enter your personal details <strong>to create an acount</strong></span>
                    </div>
                    <div class="logmod__form">
                        <form accept-charset="utf-8" action="#" class="simform">
                            <div class="sminputs">
                                <div class="input full">
                                    <label class="string optional" for="user-name">Email*</label>
                                    <input class="string optional" maxlength="255" id="user-email" placeholder="Email" type="email" size="50" />
                                </div>
                            </div>
                            <div class="sminputs">
                                <div class="input string optional">
                                    <label class="string optional" for="user-pw">Password *</label>
                                    <input class="string optional" maxlength="255" id="user-pw" placeholder="Password" type="text" size="50" />
                                </div>
                                <div class="input string optional">
                                    <label class="string optional" for="user-pw-repeat">Repeat password *</label>
                                    <input class="string optional" maxlength="255" id="user-pw-repeat" placeholder="Repeat password" type="text" size="50" />
                                </div>
                            </div>
                            <div class="simform__actions">
                                <input class="sumbit" name="commit" type="sumbit" value="Create Account" />
                                <span class="simform__actions-sidetext">By creating an account you agree to our <a class="special" href="#" target="_blank" role="link">Terms & Privacy</a></span>
                            </div>
                        </form>
                    </div>
                    <div class="logmod__alter">
                        <div class="logmod__alter-container">
                            <a href="#" class="connect facebook">
                                <div class="connect__icon">
                                    <i class="fa fa-facebook"></i>
                                </div>
                                <div class="connect__context">
                                    <span>Create an account with <strong>Facebook</strong></span>
                                </div>
                            </a>

                            <a href="#" class="connect googleplus">
                                <div class="connect__icon">
                                    <i class="fa fa-google-plus"></i>
                                </div>
                                <div class="connect__context">
                                    <span>Create an account with <strong>Google+</strong></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="logmod__tab lgm-2">
                    <div class="logmod__heading">
                        <span class="logmod__heading-subtitle">Enter your email and password <strong>to sign in</strong></span>
                    </div>
                    <div class="logmod__form">
                        <form accept-charset="utf-8" action="#" class="simform">
                            <div class="sminputs">
                                <div class="input full">
                                    <label class="string optional" for="user-name">Email*</label>
                                    <input class="string optional" maxlength="255" id="user-email" placeholder="Email" type="email" size="50" />
                                </div>
                            </div>
                            <div class="sminputs">
                                <div class="input full">
                                    <label class="string optional" for="user-pw">Password *</label>
                                    <input class="string optional" maxlength="255" id="user-pw" placeholder="Password" type="password" size="50" />
                                    <span class="hide-password">Show</span>
                                </div>
                            </div>
                            <div class="simform__actions">
                                <input class="sumbit" name="commit" type="sumbit" value="Log In" />
                                <span class="simform__actions-sidetext"><a class="special" role="link" href="#">Forgot your password?<br>Click here</a></span>
                            </div>
                        </form>
                    </div>
                    <div class="logmod__alter">
                        <div class="logmod__alter-container">
                            <a href="#" class="connect facebook">
                                <div class="connect__icon">
                                    <i class="fa fa-facebook"></i>
                                </div>
                                <div class="connect__context">
                                    <span>Sign in with <strong>Facebook</strong></span>
                                </div>
                            </a>
                            <a href="#" class="connect googleplus">
                                <div class="connect__icon">
                                    <i class="fa fa-google-plus"></i>
                                </div>
                                <div class="connect__context">
                                    <span>Sign in with <strong>Google+</strong></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var LoginModalController = {
        tabsElementName: ".logmod__tabs li",
        tabElementName: ".logmod__tab",
        inputElementsName: ".logmod__form .input",
        hidePasswordName: ".hide-password",

        inputElements: null,
        tabsElement: null,
        tabElement: null,
        hidePassword: null,

        activeTab: null,
        tabSelection: 0, // 0 - first, 1 - second

        findElements: function () {
            var base = this;

            base.tabsElement = $(base.tabsElementName);
            base.tabElement = $(base.tabElementName);
            base.inputElements = $(base.inputElementsName);
            base.hidePassword = $(base.hidePasswordName);

            return base;
        },

        setState: function (state) {
            var base = this,
                elem = null;

            if (!state) {
                state = 0;
            }

            if (base.tabsElement) {
                elem = $(base.tabsElement[state]);
                elem.addClass("current");
                $("." + elem.attr("data-tabtar")).addClass("show");
            }

            return base;
        },

        getActiveTab: function () {
            var base = this;

            base.tabsElement.each(function (i, el) {
                if ($(el).hasClass("current")) {
                    base.activeTab = $(el);
                }
            });

            return base;
        },

        addClickEvents: function () {
            var base = this;

            base.hidePassword.on("click", function (e) {
                var $this = $(this),
                    $pwInput = $this.prev("input");

                if ($pwInput.attr("type") == "password") {
                    $pwInput.attr("type", "text");
                    $this.text("Hide");
                } else {
                    $pwInput.attr("type", "password");
                    $this.text("Show");
                }
            });

            base.tabsElement.on("click", function (e) {
                var targetTab = $(this).attr("data-tabtar");

                e.preventDefault();
                base.activeTab.removeClass("current");
                base.activeTab = $(this);
                base.activeTab.addClass("current");

                base.tabElement.each(function (i, el) {
                    el = $(el);
                    el.removeClass("show");
                    if (el.hasClass(targetTab)) {
                        el.addClass("show");
                    }
                });
            });

            base.inputElements.find("label").on("click", function (e) {
                var $this = $(this),
                    $input = $this.next("input");

                $input.focus();
            });

            return base;
        },

        initialize: function () {
            var base = this;

            base.findElements().setState().getActiveTab().addClickEvents();
        }
    };

    $(document).ready(function() {
        LoginModalController.initialize();
    });

</script>