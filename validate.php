<!DOCTYPE html>
<html>

<head>
    <style>
        html,
        body {
            font-family: 'Titillium Web';
        }
        /*
 * HTML5 Boilerplate
 *
 * What follows is the result of much research on cross-browser styling.
 * Credit left inline and big thanks to Nicolas Gallagher, Jonathan Neal,
 * Kroc Camen, and the H5BP dev community and team.
 */
        /* ==========================================================================
   Base styles: opinionated defaults
   ========================================================================== */
        
        html,
        button,
        input,
        select,
        textarea {
            color: #222;
        }
        
        body {
            font-size: 1em;
            line-height: 1.4;
        }
        /*
 * Remove text-shadow in selection highlight: h5bp.com/i
 * These selection rule sets have to be separate.
 * Customize the background color to match your design.
 */
        
         ::-moz-selection {
            background: #b3d4fc;
            text-shadow: none;
        }
        
         ::selection {
            background: #b3d4fc;
            text-shadow: none;
        }
        /*
 * A better looking default horizontal rule
 */
        
        hr {
            display: block;
            height: 1px;
            border: 0;
            border-top: 1px solid #ccc;
            margin: 1em 0;
            padding: 0;
        }
        /*
 * Remove the gap between images and the bottom of their containers: h5bp.com/i/440
 */
        
        img {
            vertical-align: middle;
        }
        /*
 * Remove default fieldset styles.
 */
        
        fieldset {
            border: 0;
            margin: 0;
            padding: 0;
        }
        /*
 * Allow only vertical resizing of textareas.
 */
        
        textarea {
            resize: vertical;
        }
        /* ==========================================================================
   Chrome Frame prompt
   ========================================================================== */
        
        .chromeframe {
            margin: 0.2em 0;
            background: #ccc;
            color: #000;
            padding: 0.2em 0;
        }
        /* ==========================================================================
   Author's custom styles
   ========================================================================== */
        /* ==========================================================================
   Helper classes
   ========================================================================== */
        /*
 * Image replacement
 */
        
        .ir {
            background-color: transparent;
            border: 0;
            overflow: hidden;
            /* IE 6/7 fallback */
            *text-indent: -9999px;
        }
        
        .ir:before {
            content: "";
            display: block;
            width: 0;
            height: 150%;
        }
        /*
 * Hide from both screenreaders and browsers: h5bp.com/u
 */
        
        .hidden {
            display: none !important;
            visibility: hidden;
        }
        /*
 * Hide only visually, but have it available for screenreaders: h5bp.com/v
 */
        
        .visuallyhidden {
            border: 0;
            clip: rect(0 0 0 0);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px;
        }
        /*
 * Extends the .visuallyhidden class to allow the element to be focusable
 * when navigated to via the keyboard: h5bp.com/p
 */
        
        .visuallyhidden.focusable:active,
        .visuallyhidden.focusable:focus {
            clip: auto;
            height: auto;
            margin: 0;
            overflow: visible;
            position: static;
            width: auto;
        }
        /*
 * Hide visually and from screenreaders, but maintain layout
 */
        
        .invisible {
            visibility: hidden;
        }
        /*
 * Clearfix: contain floats
 *
 * For modern browsers
 * 1. The space content is one way to avoid an Opera bug when the
 *    `contenteditable` attribute is included anywhere else in the document.
 *    Otherwise it causes space to appear at the top and bottom of elements
 *    that receive the `clearfix` class.
 * 2. The use of `table` rather than `block` is only necessary if using
 *    `:before` to contain the top-margins of child elements.
 */
        
        .clearfix:before,
        .clearfix:after {
            content: " ";
            /* 1 */
            display: table;
            /* 2 */
        }
        
        .clearfix:after {
            clear: both;
        }
        /*
 * For IE 6/7 only
 * Include this rule to trigger hasLayout and contain floats.
 */
        
        .clearfix {
            *zoom: 1;
        }
        /* ==========================================================================
   EXAMPLE Media Queries for Responsive Design.
   These examples override the primary ('mobile first') styles.
   Modify as content requires.
   ========================================================================== */
        
        @media only screen and (min-width: 35em) {
            /* Style adjustments for viewports that meet the condition */
        }
        
        @media print,
        (-o-min-device-pixel-ratio: 5/4),
        (-webkit-min-device-pixel-ratio: 1.25),
        (min-resolution: 120dpi) {
            /* Style adjustments for high resolution devices */
        }
        /* ==========================================================================
   Print styles.
   Inlined to avoid required HTTP connection: h5bp.com/r
   ========================================================================== */
        
        @media print {
            * {
                background: transparent !important;
                color: #000 !important;
                /* Black prints faster: h5bp.com/s */
                box-shadow: none !important;
                text-shadow: none !important;
            }
            a,
            a:visited {
                text-decoration: underline;
            }
            a[href]:after {
                content: " (" attr(href) ")";
            }
            abbr[title]:after {
                content: " (" attr(title) ")";
            }
            /*
     * Don't show links for images, or javascript/internal links
     */
            .ir a:after,
            a[href^="javascript:"]:after,
            a[href^="#"]:after {
                content: "";
            }
            pre,
            blockquote {
                border: 1px solid #999;
                page-break-inside: avoid;
            }
            thead {
                display: table-header-group;
                /* h5bp.com/t */
            }
            tr,
            img {
                page-break-inside: avoid;
            }
            img {
                max-width: 100% !important;
            }
            @page {
                margin: 0.5cm;
            }
            p,
            h2,
            h3 {
                orphans: 3;
                widows: 3;
            }
            h2,
            h3 {
                page-break-after: avoid;
            }
        }
        /*! normalize.css v1.1.1 | MIT License | git.io/normalize */
        /* ==========================================================================
   HTML5 display definitions
   ========================================================================== */
        /**
 * Correct `block` display not defined in IE 6/7/8/9 and Firefox 3.
 */
        
        article,
        aside,
        details,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        main,
        nav,
        section,
        summary {
            display: block;
        }
        /**
 * Correct `inline-block` display not defined in IE 6/7/8/9 and Firefox 3.
 */
        
        audio,
        canvas,
        video {
            display: inline-block;
            *display: inline;
            *zoom: 1;
        }
        /**
 * Prevent modern browsers from displaying `audio` without controls.
 * Remove excess height in iOS 5 devices.
 */
        
        audio:not([controls]) {
            display: none;
            height: 0;
        }
        /**
 * Address styling not present in IE 7/8/9, Firefox 3, and Safari 4.
 * Known issue: no IE 6 support.
 */
        
        [hidden] {
            display: none;
        }
        /* ==========================================================================
   Base
   ========================================================================== */
        /**
 * 1. Prevent system color scheme's background color being used in Firefox, IE,
 *    and Opera.
 * 2. Prevent system color scheme's text color being used in Firefox, IE, and
 *    Opera.
 * 3. Correct text resizing oddly in IE 6/7 when body `font-size` is set using
 *    `em` units.
 * 4. Prevent iOS text size adjust after orientation change, without disabling
 *    user zoom.
 */
        
        html {
            background: #fff;
            /* 1 */
            color: #000;
            /* 2 */
            font-size: 100%;
            /* 3 */
            -webkit-text-size-adjust: 100%;
            /* 4 */
            -ms-text-size-adjust: 100%;
            /* 4 */
        }
        /**
 * Address `font-family` inconsistency between `textarea` and other form
 * elements.
 */
        
        html,
        button,
        input,
        select,
        textarea {
            font-family: 'Titillium Web';
        }
        /**
 * Address margins handled incorrectly in IE 6/7.
 */
        
        body {
            margin: 0;
        }
        /* ==========================================================================
   Links
   ========================================================================== */
        /**
 * Address `outline` inconsistency between Chrome and other browsers.
 */
        
        a:focus {
            outline: thin dotted;
        }
        /**
 * Improve readability when focused and also mouse hovered in all browsers.
 */
        
        a:active,
        a:hover {
            outline: 0;
        }
        /* ==========================================================================
   Typography
   ========================================================================== */
        /**
 * Address font sizes and margins set differently in IE 6/7.
 * Address font sizes within `section` and `article` in Firefox 4+, Safari 5,
 * and Chrome.
 */
        
        h1 {
            font-size: 2em;
            margin: 0.67em 0;
        }
        
        h2 {
            font-size: 1.5em;
            margin: 0.83em 0;
        }
        
        h3 {
            font-size: 1.17em;
            margin: 1em 0;
        }
        
        h4 {
            font-size: 1em;
            margin: 1.33em 0;
        }
        
        h5 {
            font-size: 0.83em;
            margin: 1.67em 0;
        }
        
        h6 {
            font-size: 0.67em;
            margin: 2.33em 0;
        }
        /**
 * Address styling not present in IE 7/8/9, Safari 5, and Chrome.
 */
        
        abbr[title] {
            border-bottom: 1px dotted;
        }
        /**
 * Address style set to `bolder` in Firefox 3+, Safari 4/5, and Chrome.
 */
        
        b,
        strong {
            font-weight: bold;
        }
        
        blockquote {
            margin: 1em 40px;
        }
        /**
 * Address styling not present in Safari 5 and Chrome.
 */
        
        dfn {
            font-style: italic;
        }
        /**
 * Address differences between Firefox and other browsers.
 * Known issue: no IE 6/7 normalization.
 */
        
        hr {
            -moz-box-sizing: content-box;
            box-sizing: content-box;
            height: 0;
        }
        /**
 * Address styling not present in IE 6/7/8/9.
 */
        
        mark {
            background: #ff0;
            color: #000;
        }
        /**
 * Address margins set differently in IE 6/7.
 */
        
        p,
        pre {
            margin: 1em 0;
        }
        /**
 * Correct font family set oddly in IE 6, Safari 4/5, and Chrome.
 */
        
        code,
        kbd,
        pre,
        samp {
            font-family: 'Titillium Web';
            font-size: 1em;
        }
        /**
 * Improve readability of pre-formatted text in all browsers.
 */
        
        pre {
            white-space: pre;
            white-space: pre-wrap;
            word-wrap: break-word;
        }
        /**
 * Address CSS quotes not supported in IE 6/7.
 */
        
        q {
            quotes: none;
        }
        /**
 * Address `quotes` property not supported in Safari 4.
 */
        
        q:before,
        q:after {
            content: '';
            content: none;
        }
        /**
 * Address inconsistent and variable font size in all browsers.
 */
        
        small {
            font-size: 80%;
        }
        /**
 * Prevent `sub` and `sup` affecting `line-height` in all browsers.
 */
        
        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline;
        }
        
        sup {
            top: -0.5em;
        }
        
        sub {
            bottom: -0.25em;
        }
        /* ==========================================================================
   Lists
   ========================================================================== */
        /**
 * Address margins set differently in IE 6/7.
 */
        
        dl,
        menu,
        ol,
        ul {
            margin: 1em 0;
        }
        
        dd {
            margin: 0 0 0 40px;
        }
        /**
 * Address paddings set differently in IE 6/7.
 */
        
        menu,
        ol,
        ul {
            padding: 0 0 0 40px;
        }
        /**
 * Correct list images handled incorrectly in IE 7.
 */
        
        nav ul,
        nav ol {
            list-style: none;
            list-style-image: none;
        }
        /* ==========================================================================
   Embedded content
   ========================================================================== */
        /**
 * 1. Remove border when inside `a` element in IE 6/7/8/9 and Firefox 3.
 * 2. Improve image quality when scaled in IE 7.
 */
        
        img {
            border: 0;
            /* 1 */
            -ms-interpolation-mode: bicubic;
            /* 2 */
        }
        /**
 * Correct overflow displayed oddly in IE 9.
 */
        
        svg:not(:root) {
            overflow: hidden;
        }
        /* ==========================================================================
   Figures
   ========================================================================== */
        /**
 * Address margin not present in IE 6/7/8/9, Safari 5, and Opera 11.
 */
        
        figure {
            margin: 0;
        }
        /* ==========================================================================
   Forms
   ========================================================================== */
        /**
 * Correct margin displayed oddly in IE 6/7.
 */
        
        form {
            margin: 0;
        }
        /**
 * Define consistent border, margin, and padding.
 */
        
        fieldset {
            border: 1px solid #c0c0c0;
            margin: 0 2px;
            padding: 0.35em 0.625em 0.75em;
        }
        /**
 * 1. Correct color not being inherited in IE 6/7/8/9.
 * 2. Correct text not wrapping in Firefox 3.
 * 3. Correct alignment displayed oddly in IE 6/7.
 */
        
        legend {
            border: 0;
            /* 1 */
            padding: 0;
            white-space: normal;
            /* 2 */
            *margin-left: -7px;
            /* 3 */
        }
        /**
 * 1. Correct font size not being inherited in all browsers.
 * 2. Address margins set differently in IE 6/7, Firefox 3+, Safari 5,
 *    and Chrome.
 * 3. Improve appearance and consistency in all browsers.
 */
        
        button,
        input,
        select,
        textarea {
            font-size: 100%;
            /* 1 */
            margin: 0;
            /* 2 */
            vertical-align: baseline;
            /* 3 */
            *vertical-align: middle;
            /* 3 */
        }
        /**
 * Address Firefox 3+ setting `line-height` on `input` using `!important` in
 * the UA stylesheet.
 */
        
        button,
        input {
            line-height: normal;
        }
        /**
 * Address inconsistent `text-transform` inheritance for `button` and `select`.
 * All other form control elements do not inherit `text-transform` values.
 * Correct `button` style inheritance in Chrome, Safari 5+, and IE 6+.
 * Correct `select` style inheritance in Firefox 4+ and Opera.
 */
        
        button,
        select {
            text-transform: none;
        }
        /**
 * 1. Avoid the WebKit bug in Android 4.0.* where (2) destroys native `audio`
 *    and `video` controls.
 * 2. Correct inability to style clickable `input` types in iOS.
 * 3. Improve usability and consistency of cursor style between image-type
 *    `input` and others.
 * 4. Remove inner spacing in IE 7 without affecting normal text inputs.
 *    Known issue: inner spacing remains in IE 6.
 */
        
        button,
        html input[type="button"],
        /* 1 */
        
        input[type="reset"],
        input[type="submit"] {
            -webkit-appearance: button;
            /* 2 */
            cursor: pointer;
            /* 3 */
            *overflow: visible;
            /* 4 */
        }
        /**
 * Re-set default cursor for disabled elements.
 */
        
        button[disabled],
        html input[disabled] {
            cursor: default;
        }
        /**
 * 1. Address box sizing set to content-box in IE 8/9.
 * 2. Remove excess padding in IE 8/9.
 * 3. Remove excess padding in IE 7.
 *    Known issue: excess padding remains in IE 6.
 */
        
        input[type="checkbox"],
        input[type="radio"] {
            box-sizing: border-box;
            /* 1 */
            padding: 0;
            /* 2 */
            *height: 13px;
            /* 3 */
            *width: 13px;
            /* 3 */
        }
        /**
 * 1. Address `appearance` set to `searchfield` in Safari 5 and Chrome.
 * 2. Address `box-sizing` set to `border-box` in Safari 5 and Chrome
 *    (include `-moz` to future-proof).
 */
        
        input[type="search"] {
            -webkit-appearance: textfield;
            /* 1 */
            -moz-box-sizing: content-box;
            -webkit-box-sizing: content-box;
            /* 2 */
            box-sizing: content-box;
        }
        /**
 * Remove inner padding and search cancel button in Safari 5 and Chrome
 * on OS X.
 */
        
        input[type="search"]::-webkit-search-cancel-button,
        input[type="search"]::-webkit-search-decoration {
            -webkit-appearance: none;
        }
        /**
 * Remove inner padding and border in Firefox 3+.
 */
        
        button::-moz-focus-inner,
        input::-moz-focus-inner {
            border: 0;
            padding: 0;
        }
        /**
 * 1. Remove default vertical scrollbar in IE 6/7/8/9.
 * 2. Improve readability and alignment in all browsers.
 */
        
        textarea {
            overflow: auto;
            /* 1 */
            vertical-align: top;
            /* 2 */
        }
        /* ==========================================================================
   Tables
   ========================================================================== */
        /**
 * Remove most spacing between table cells.
 */
        
        table {
            border-collapse: collapse;
            border-spacing: 0;
        }
        /*
    Common 
*/
        
        .wizard,
        .tabcontrol {
            display: block;
            width: 100%;
            overflow: hidden;
        }
        
        .wizard a,
        .tabcontrol a {
            outline: 0;
        }
        
        .wizard ul,
        .tabcontrol ul {
            list-style: none !important;
            padding: 0;
            margin: 0;
        }
        
        .wizard ul>li,
        .tabcontrol ul>li {
            display: block;
            padding: 0;
        }
        /* Accessibility */
        
        .wizard>.steps .current-info,
        .tabcontrol>.steps .current-info {
            position: absolute;
            left: -999em;
        }
        
        .wizard>.content>.title,
        .tabcontrol>.content>.title {
            position: absolute;
            left: -999em;
        }
        /*
    Wizard
*/
        
        .wizard>.steps {
            position: relative;
            display: block;
            width: 100%;
        }
        
        .wizard.vertical>.steps {
            display: inline;
            float: left;
            width: 30%;
        }
        
        .wizard>.steps .number {
            font-size: 1.429em;
        }
        
        .wizard>.steps>ul>li {
            width: 25%;
        }
        
        .wizard>.steps>ul>li,
        .wizard>.actions>ul>li {
            float: left;
        }
        
        .wizard.vertical>.steps>ul>li {
            float: none;
            width: 100%;
        }
        
        .wizard>.steps a,
        .wizard>.steps a:hover,
        .wizard>.steps a:active {
            display: block;
            width: auto;
            margin: 0 0.5em 0.5em;
            padding: 1em 1em;
            text-decoration: none;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
        }
        
        .wizard>.steps .disabled a,
        .wizard>.steps .disabled a:hover,
        .wizard>.steps .disabled a:active {
            background: #eee;
            color: #aaa;
            cursor: default;
        }
        
        .wizard>.steps .current a,
        .wizard>.steps .current a:hover,
        .wizard>.steps .current a:active {
            background: #fcfcfc;
            color: #111;
            cursor: default;
        }
        
        .wizard>.steps .done a,
        .wizard>.steps .done a:hover,
        .wizard>.steps .done a:active {
            background: #4CAF50;
            color: #fff;
        }
        
        .wizard>.steps .error a,
        .wizard>.steps .error a:hover,
        .wizard>.steps .error a:active {
            background: #ff3111;
            color: #fff;
        }
        
        .wizard>.content {
            background: #eee;
            display: block;
            margin: 0.5em;
            min-height: 35em;
            overflow: hidden;
            position: relative;
            width: auto;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
        }
        
        .wizard.vertical>.content {
            display: inline;
            float: left;
            margin: 0 2.5% 0.5em 2.5%;
            width: 65%;
        }
        
        .wizard>.content>.body {
            float: left;
            position: absolute;
            width: 95%;
            height: 95%;
            padding: 2.5%;
        }
        
        .wizard>.content>.body ul {
            list-style: disc !important;
        }
        
        .wizard>.content>.body ul>li {
            display: list-item;
        }
        
        .wizard>.content>.body>iframe {
            border: 0 none;
            width: 100%;
            height: 100%;
        }
        
        .wizard>.content>.body input {
            display: block;
            border: 1px solid #ccc;
        }
        
        .wizard>.content>.body input[type="checkbox"] {
            display: inline-block;
        }
        
        .wizard>.content>.body input.error {
            background: rgb(251, 227, 228);
            border: 1px solid #fbc2c4;
            color: #8a1f11;
        }
        
        .wizard>.content>.body label {
            display: inline-block;
            margin-bottom: 0.5em;
        }
        
        .wizard>.content>.body label.error {
            color: #8a1f11;
            display: inline-block;
            margin-left: 1.5em;
        }
        
        .wizard>.actions {
            position: relative;
            display: block;
            text-align: right;
            width: 100%;
        }
        
        .wizard.vertical>.actions {
            display: inline;
            float: right;
            margin: 0 2.5%;
            width: 95%;
        }
        
        .wizard>.actions>ul {
            display: inline-block;
            text-align: right;
        }
        
        .wizard>.actions>ul>li {
            margin: 0 0.5em;
        }
        
        .wizard.vertical>.actions>ul>li {
            margin: 0 0 0 1em;
        }
        
        .wizard>.actions a,
        .wizard>.actions a:hover,
        .wizard>.actions a:active {
            background: #2184be;
            color: #fff;
            display: block;
            padding: 0.5em 1em;
            text-decoration: none;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
        }
        
        .wizard>.actions .disabled a,
        .wizard>.actions .disabled a:hover,
        .wizard>.actions .disabled a:active {
            background: #eee;
            color: #aaa;
        }
        
        .wizard>.loading {}
        
        .wizard>.loading .spinner {}
        /*
    Tabcontrol
*/
        
        .tabcontrol>.steps {
            position: relative;
            display: block;
            width: 100%;
        }
        
        .tabcontrol>.steps>ul {
            position: relative;
            margin: 6px 0 0 0;
            top: 1px;
            z-index: 1;
        }
        
        .tabcontrol>.steps>ul>li {
            float: left;
            margin: 5px 2px 0 0;
            padding: 1px;
            -webkit-border-top-left-radius: 5px;
            -webkit-border-top-right-radius: 5px;
            -moz-border-radius-topleft: 5px;
            -moz-border-radius-topright: 5px;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }
        
        .tabcontrol>.steps>ul>li:hover {
            background: #edecec;
            border: 1px solid #bbb;
            padding: 0;
        }
        
        .tabcontrol>.steps>ul>li.current {
            background: #fff;
            border: 1px solid #bbb;
            border-bottom: 0 none;
            padding: 0 0 1px 0;
            margin-top: 0;
        }
        
        .tabcontrol>.steps>ul>li>a {
            color: #5f5f5f;
            display: inline-block;
            border: 0 none;
            margin: 0;
            padding: 10px 30px;
            text-decoration: none;
        }
        
        .tabcontrol>.steps>ul>li>a:hover {
            text-decoration: none;
        }
        
        .tabcontrol>.steps>ul>li.current>a {
            padding: 15px 30px 10px 30px;
        }
        
        .tabcontrol>.content {
            position: relative;
            display: inline-block;
            width: 100%;
            height: 35em;
            overflow: hidden;
            border-top: 1px solid #bbb;
            padding-top: 20px;
        }
        
        .tabcontrol>.content>.body {
            float: left;
            position: absolute;
            width: 95%;
            height: 95%;
            padding: 2.5%;
        }
        
        .tabcontrol>.content>.body ul {
            list-style: disc !important;
        }
        
        .tabcontrol>.content>.body ul>li {
            display: list-item;
        }
        
        @import url(https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic);
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-font-smoothing: antialiased;
            -moz-font-smoothing: antialiased;
            -o-font-smoothing: antialiased;
            font-smoothing: antialiased;
            text-rendering: optimizeLegibility;
        }
        
        body {
            font-family: 'Titillium Web';
            font-weight: 100;
            font-size: 12px;
            line-height: 30px;
            color: #777;
            background: #4CAF50;
        }
        
        .container {
            max-width: 800px;
            width: 100%;
            margin: 0 auto;
            position: relative;
        }
        
        #contact input[type="text"],
        #contact input[type="email"],
        #contact input[type="tel"],
        #contact input[type="url"],
        #contact textarea,
        #contact button[type="submit"] {
            font: 400 12px/16px "Titillium Web", Helvetica, Arial, sans-serif;
        }
        
        #contact {
            background: #F9F9F9;
            padding: 25px;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
        }
        
        #contact h3 {
            display: block;
            font-size: 30px;
            font-weight: 300;
            margin-bottom: 10px;
        }
        
        #contact h4 {
            margin: 5px 0 15px;
            display: block;
            font-size: 13px;
            font-weight: 400;
        }
        
        fieldset {
            border: medium none !important;
            margin: 0 0 10px;
            min-width: 100%;
            padding: 0;
            width: 100%;
        }
        
        #contact input[type="text"],
        #contact input[type="email"],
        #contact input[type="tel"],
        #contact input[type="url"],
        #contact textarea {
            width: 100%;
            border: 1px solid #ccc;
            background: #FFF;
            margin: 0 0 5px;
            padding: 10px;
        }
        
        #contact input[type="text"]:hover,
        #contact input[type="email"]:hover,
        #contact input[type="tel"]:hover,
        #contact input[type="url"]:hover,
        #contact textarea:hover {
            -webkit-transition: border-color 0.3s ease-in-out;
            -moz-transition: border-color 0.3s ease-in-out;
            transition: border-color 0.3s ease-in-out;
            border: 1px solid #aaa;
        }
        
        #contact textarea {
            height: 100px;
            max-width: 100%;
            resize: none;
        }
        
        #contact button[type="submit"] {
            cursor: pointer;
            width: 100%;
            border: none;
            background: #4CAF50;
            color: #FFF;
            margin: 0 0 5px;
            padding: 10px;
            font-size: 15px;
        }
        
        #contact button[type="submit"]:hover {
            background: #43A047;
            -webkit-transition: background 0.3s ease-in-out;
            -moz-transition: background 0.3s ease-in-out;
            transition: background-color 0.3s ease-in-out;
        }
        
        #contact button[type="submit"]:active {
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
        }
        
        .copyright {
            text-align: center;
        }
        
        #contact input:focus,
        #contact textarea:focus {
            outline: 0;
            border: 1px solid #aaa;
        }
        
         ::-webkit-input-placeholder {
            color: #888;
        }
        
         :-moz-placeholder {
            color: #888;
        }
        
         ::-moz-placeholder {
            color: #888;
        }
        
         :-ms-input-placeholder {
            color: #888;
        }
        
        .steps>ul>li>a,
        .actions li a {
            padding: 10px;
            text-decoration: none;
            margin: 1px;
            display: block;
            color: #777;
        }
        
        .steps>ul>li,
        .actions li {
            list-style: none;
        }
        
        .container {
            min-height: 100vh;
            padding-top: 3%;
        }
    </style>

</head>

<body>
    <!-- Thanks to Pieter B. for helping out with the logistics -->
    <div class="container">
        <form id="contact" action="#">
            <div>
                <h3>Account</h3>
                <section>
                    <label for="userName">User name *</label>
                    <input id="userName" name="userName" type="text" class="required">
                    <label for="password">Password *</label>
                    <input id="password" name="password" type="text" class="required">
                    <label for="confirm">Confirm Password *</label>
                    <input id="confirm" name="confirm" type="text" class="required">
                    <p>(*) Mandatory</p>
                </section>
                <h3>Profile</h3>
                <section>
                    <label for="name">First name *</label>
                    <input id="name" name="name" type="text" class="required">
                    <label for="surname">Last name *</label>
                    <input id="surname" name="surname" type="text" class="required">
                    <label for="email">Email *</label>
                    <input id="email" name="email" type="text" class="required email">
                    <label for="address">Address</label>
                    <input id="address" name="address" type="text">
                    <p>(*) Mandatory</p>
                </section>
                <h3>Hints</h3>
                <section>
                    <ul>
                        <li>Foo</li>
                        <li>Bar</li>
                        <li>Foobar</li>
                    </ul>
                </section>
                <h3>Finish</h3>
                <section>
                    <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required"> <label for="acceptTerms">I agree with the Terms and Conditions.</label>
                </section>
            </div>
        </form>
    </div>

</body>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.js"></script>
<script>
    var form = $("#contact");
    form.validate({
        errorPlacement: function errorPlacement(error, element) {
            element.before(error);
        },
        rules: {
            confirm: {
                equalTo: "#password"
            }
        }
    });
    form.children("div").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        onStepChanging: function(event, currentIndex, newIndex) {
            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
        },
        onFinishing: function(event, currentIndex) {
            form.validate().settings.ignore = ":disabled";
            return form.valid();
        },
        onFinished: function(event, currentIndex) {
            alert("Submitted!");
        }
    });
</script>

</html>