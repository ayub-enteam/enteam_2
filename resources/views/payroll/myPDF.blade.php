<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        */:root {
            --blue: #007bff;
            --indigo: #6610f2;
            --purple: #6f42c1;
            --pink: #e83e8c;
            --red: #dc3545;
            --orange: #fd7e14;
            --yellow: #ffc107;
            --green: #28a745;
            --teal: #20c997;
            --cyan: #17a2b8;
            --white: #fff;
            --gray: #6c757d;
            --gray-dark: #343a40;
            --primary: #007bff;
            --secondary: #6c757d;
            --success: #28a745;
            --info: #17a2b8;
            --warning: #ffc107;
            --danger: #dc3545;
            --light: #f8f9fa;
            --dark: #343a40;
            --breakpoint-xs: 0;
            --breakpoint-sm: 576px;
            --breakpoint-md: 768px;
            --breakpoint-lg: 992px;
            --breakpoint-xl: 1200px;
            --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace
        }

        *,
        ::after,
        ::before {
            box-sizing: border-box
        }

        html {
            font-family: sans-serif;
            line-height: 1.15;
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: transparent
        }

        article,
        aside,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        main,
        nav,
        section {
            display: block
        }

        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            text-align: left;
            background-color: #fff
        }

        [tabindex="-1"]:focus:not(:focus-visible) {
            outline: 0 !important
        }

        hr {
            box-sizing: content-box;
            height: 0;
            overflow: visible
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin-top: 0;
            margin-bottom: .5rem
        }

        p {
            margin-top: 0;
            margin-bottom: 1rem
        }

        abbr[data-original-title],
        abbr[title] {
            text-decoration: underline;
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted;
            cursor: help;
            border-bottom: 0;
            -webkit-text-decoration-skip-ink: none;
            text-decoration-skip-ink: none
        }

        address {
            margin-bottom: 1rem;
            font-style: normal;
            line-height: inherit
        }

        dl,
        ol,
        ul {
            margin-top: 0;
            margin-bottom: 1rem
        }

        ol ol,
        ol ul,
        ul ol,
        ul ul {
            margin-bottom: 0
        }

        dt {
            font-weight: 700
        }

        dd {
            margin-bottom: .5rem;
            margin-left: 0
        }

        blockquote {
            margin: 0 0 1rem
        }

        b,
        strong {
            font-weight: bolder
        }

        small {
            font-size: 80%
        }

        sub,
        sup {
            position: relative;
            font-size: 75%;
            line-height: 0;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        sup {
            top: -.5em
        }

        a {
            color: #007bff;
            text-decoration: none;
            background-color: transparent
        }

        a:hover {
            color: #0056b3;
            text-decoration: underline
        }

        a:not([href]):not([class]) {
            color: inherit;
            text-decoration: none
        }

        a:not([href]):not([class]):hover {
            color: inherit;
            text-decoration: none
        }

        code,
        kbd,
        pre,
        samp {
            font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-size: 1em
        }

        pre {
            margin-top: 0;
            margin-bottom: 1rem;
            overflow: auto;
            -ms-overflow-style: scrollbar
        }

        figure {
            margin: 0 0 1rem
        }

        img {
            vertical-align: middle;
            border-style: none
        }

        svg {
            overflow: hidden;
            vertical-align: middle
        }

        table {
            border-collapse: collapse
        }

        caption {
            padding-top: .75rem;
            padding-bottom: .75rem;
            color: #6c757d;
            text-align: left;
            caption-side: bottom
        }

        th {
            text-align: inherit;
            text-align: -webkit-match-parent
        }

        label {
            display: inline-block;
            margin-bottom: .5rem
        }

        button {
            border-radius: 0
        }

        button:focus:not(:focus-visible) {
            outline: 0
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            margin: 0;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit
        }

        button,
        input {
            overflow: visible
        }

        button,
        select {
            text-transform: none
        }

        [role=button] {
            cursor: pointer
        }

        select {
            word-wrap: normal
        }

        [type=button],
        [type=reset],
        [type=submit],
        button {
            -webkit-appearance: button
        }

        [type=button]:not(:disabled),
        [type=reset]:not(:disabled),
        [type=submit]:not(:disabled),
        button:not(:disabled) {
            cursor: pointer
        }

        [type=button]::-moz-focus-inner,
        [type=reset]::-moz-focus-inner,
        [type=submit]::-moz-focus-inner,
        button::-moz-focus-inner {
            padding: 0;
            border-style: none
        }

        input[type=checkbox],
        input[type=radio] {
            box-sizing: border-box;
            padding: 0
        }

        textarea {
            overflow: auto;
            resize: vertical
        }

        fieldset {
            min-width: 0;
            padding: 0;
            margin: 0;
            border: 0
        }

        legend {
            display: block;
            width: 100%;
            max-width: 100%;
            padding: 0;
            margin-bottom: .5rem;
            font-size: 1.5rem;
            line-height: inherit;
            color: inherit;
            white-space: normal
        }

        progress {
            vertical-align: baseline
        }

        [type=number]::-webkit-inner-spin-button,
        [type=number]::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            outline-offset: -2px;
            -webkit-appearance: none
        }

        [type=search]::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            font: inherit;
            -webkit-appearance: button
        }

        output {
            display: inline-block
        }

        summary {
            display: list-item;
            cursor: pointer
        }

        template {
            display: none
        }

        [hidden] {
            display: none !important
        }

        .h1,
        .h2,
        .h3,
        .h4,
        .h5,
        .h6,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin-bottom: .5rem;
            font-weight: 500;
            line-height: 1.2
        }

        .h1,
        h1 {
            font-size: 2.5rem
        }

        .h2,
        h2 {
            font-size: 2rem
        }

        .h3,
        h3 {
            font-size: 1.75rem
        }

        .h4,
        h4 {
            font-size: 1.5rem
        }

        .h5,
        h5 {
            font-size: 1.25rem
        }

        .h6,
        h6 {
            font-size: 1rem
        }

        .lead {
            font-size: 1.25rem;
            font-weight: 300
        }

        .display-1 {
            font-size: 6rem;
            font-weight: 300;
            line-height: 1.2
        }

        .display-2 {
            font-size: 5.5rem;
            font-weight: 300;
            line-height: 1.2
        }

        .display-3 {
            font-size: 4.5rem;
            font-weight: 300;
            line-height: 1.2
        }

        .display-4 {
            font-size: 3.5rem;
            font-weight: 300;
            line-height: 1.2
        }

        hr {
            margin-top: 1rem;
            margin-bottom: 1rem;
            border: 0;
            border-top: 1px solid rgba(0, 0, 0, .1)
        }

        .small,
        small {
            font-size: 80%;
            font-weight: 400
        }

        .mark,
        mark {
            padding: .2em;
            background-color: #fcf8e3
        }

        .list-unstyled {
            padding-left: 0;
            list-style: none
        }

        .list-inline {
            padding-left: 0;
            list-style: none
        }

        .list-inline-item {
            display: inline-block
        }

        .list-inline-item:not(:last-child) {
            margin-right: .5rem
        }

        .initialism {
            font-size: 90%;
            text-transform: uppercase
        }

        .blockquote {
            margin-bottom: 1rem;
            font-size: 1.25rem
        }

        .blockquote-footer {
            display: block;
            font-size: 80%;
            color: #6c757d
        }

        .blockquote-footer::before {
            content: "\2014\00A0"
        }

        .img-fluid {
            max-width: 100%;
            height: auto
        }

        .img-thumbnail {
            padding: .25rem;
            background-color: #fff;
            border: 1px solid #dee2e6;
            border-radius: .25rem;
            max-width: 100%;
            height: auto
        }

        .figure {
            display: inline-block
        }

        .figure-img {
            margin-bottom: .5rem;
            line-height: 1
        }

        .figure-caption {
            font-size: 90%;
            color: #6c757d
        }

        code {
            font-size: 87.5%;
            color: #e83e8c;
            word-wrap: break-word
        }

        a>code {
            color: inherit
        }

        kbd {
            padding: .2rem .4rem;
            font-size: 87.5%;
            color: #fff;
            background-color: #212529;
            border-radius: .2rem
        }

        kbd kbd {
            padding: 0;
            font-size: 100%;
            font-weight: 700
        }

        pre {
            display: block;
            font-size: 87.5%;
            color: #212529
        }

        pre code {
            font-size: inherit;
            color: inherit;
            word-break: normal
        }

        .pre-scrollable {
            max-height: 340px;
            overflow-y: scroll
        }

        .container,
        .container-fluid,
        .container-lg,
        .container-md,
        .container-sm,
        .container-xl {
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto
        }

        @media (min-width:576px) {

            .container,
            .container-sm {
                max-width: 540px
            }
        }

        @media (min-width:768px) {

            .container,
            .container-md,
            .container-sm {
                max-width: 720px
            }
        }

        @media (min-width:992px) {

            .container,
            .container-lg,
            .container-md,
            .container-sm {
                max-width: 960px
            }
        }

        @media (min-width:1200px) {

            .container,
            .container-lg,
            .container-md,
            .container-sm,
            .container-xl {
                max-width: 1140px
            }
        }

        .row {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px
        }

        .no-gutters {
            margin-right: 0;
            margin-left: 0
        }

        .no-gutters>.col,
        .no-gutters>[class*=col-] {
            padding-right: 0;
            padding-left: 0
        }

        .col,
        .col-1,
        .col-10,
        .col-11,
        .col-12,
        .col-2,
        .col-3,
        .col-4,
        .col-5,
        .col-6,
        .col-7,
        .col-8,
        .col-9,
        .col-auto,
        .col-lg,
        .col-lg-1,
        .col-lg-10,
        .col-lg-11,
        .col-lg-12,
        .col-lg-2,
        .col-lg-3,
        .col-lg-4,
        .col-lg-5,
        .col-lg-6,
        .col-lg-7,
        .col-lg-8,
        .col-lg-9,
        .col-lg-auto,
        .col-md,
        .col-md-1,
        .col-md-10,
        .col-md-11,
        .col-md-12,
        .col-md-2,
        .col-md-3,
        .col-md-4,
        .col-md-5,
        .col-md-6,
        .col-md-7,
        .col-md-8,
        .col-md-9,
        .col-md-auto,
        .col-sm,
        .col-sm-1,
        .col-sm-10,
        .col-sm-11,
        .col-sm-12,
        .col-sm-2,
        .col-sm-3,
        .col-sm-4,
        .col-sm-5,
        .col-sm-6,
        .col-sm-7,
        .col-sm-8,
        .col-sm-9,
        .col-sm-auto,
        .col-xl,
        .col-xl-1,
        .col-xl-10,
        .col-xl-11,
        .col-xl-12,
        .col-xl-2,
        .col-xl-3,
        .col-xl-4,
        .col-xl-5,
        .col-xl-6,
        .col-xl-7,
        .col-xl-8,
        .col-xl-9,
        .col-xl-auto {
            position: relative;
            width: 100%;
            padding-right: 15px;
            padding-left: 15px
        }

        .col {
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            -ms-flex-positive: 1;
            flex-grow: 1;
            max-width: 100%
        }

        .row-cols-1>* {
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%
        }

        .row-cols-2>* {
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%
        }

        .row-cols-3>* {
            -ms-flex: 0 0 33.333333%;
            flex: 0 0 33.333333%;
            max-width: 33.333333%
        }

        .row-cols-4>* {
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 25%
        }

        .row-cols-5>* {
            -ms-flex: 0 0 20%;
            flex: 0 0 20%;
            max-width: 20%
        }

        .row-cols-6>* {
            -ms-flex: 0 0 16.666667%;
            flex: 0 0 16.666667%;
            max-width: 16.666667%
        }

        .col-auto {
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: auto;
            max-width: 100%
        }

        .col-1 {
            -ms-flex: 0 0 8.333333%;
            flex: 0 0 8.333333%;
            max-width: 8.333333%
        }

        .col-2 {
            -ms-flex: 0 0 16.666667%;
            flex: 0 0 16.666667%;
            max-width: 16.666667%
        }

        .col-3 {
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 25%
        }

        .col-4 {
            -ms-flex: 0 0 33.333333%;
            flex: 0 0 33.333333%;
            max-width: 33.333333%
        }

        .col-5 {
            -ms-flex: 0 0 41.666667%;
            flex: 0 0 41.666667%;
            max-width: 41.666667%
        }

        .col-6 {
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%
        }

        .col-7 {
            -ms-flex: 0 0 58.333333%;
            flex: 0 0 58.333333%;
            max-width: 58.333333%
        }

        .col-8 {
            -ms-flex: 0 0 66.666667%;
            flex: 0 0 66.666667%;
            max-width: 66.666667%
        }

        .col-9 {
            -ms-flex: 0 0 75%;
            flex: 0 0 75%;
            max-width: 75%
        }

        .col-10 {
            -ms-flex: 0 0 83.333333%;
            flex: 0 0 83.333333%;
            max-width: 83.333333%
        }

        .col-11 {
            -ms-flex: 0 0 91.666667%;
            flex: 0 0 91.666667%;
            max-width: 91.666667%
        }

        .col-12 {
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%
        }

        .order-first {
            -ms-flex-order: -1;
            order: -1
        }

        .order-last {
            -ms-flex-order: 13;
            order: 13
        }

        .order-0 {
            -ms-flex-order: 0;
            order: 0
        }

        .order-1 {
            -ms-flex-order: 1;
            order: 1
        }

        .order-2 {
            -ms-flex-order: 2;
            order: 2
        }

        .order-3 {
            -ms-flex-order: 3;
            order: 3
        }

        .order-4 {
            -ms-flex-order: 4;
            order: 4
        }

        .order-5 {
            -ms-flex-order: 5;
            order: 5
        }

        .order-6 {
            -ms-flex-order: 6;
            order: 6
        }

        .order-7 {
            -ms-flex-order: 7;
            order: 7
        }

        .order-8 {
            -ms-flex-order: 8;
            order: 8
        }

        .order-9 {
            -ms-flex-order: 9;
            order: 9
        }

        .order-10 {
            -ms-flex-order: 10;
            order: 10
        }

        .order-11 {
            -ms-flex-order: 11;
            order: 11
        }

        .order-12 {
            -ms-flex-order: 12;
            order: 12
        }

        .offset-1 {
            margin-left: 8.333333%
        }

        .offset-2 {
            margin-left: 16.666667%
        }

        .offset-3 {
            margin-left: 25%
        }

        .offset-4 {
            margin-left: 33.333333%
        }

        .offset-5 {
            margin-left: 41.666667%
        }

        .offset-6 {
            margin-left: 50%
        }

        .offset-7 {
            margin-left: 58.333333%
        }

        .offset-8 {
            margin-left: 66.666667%
        }

        .offset-9 {
            margin-left: 75%
        }

        .offset-10 {
            margin-left: 83.333333%
        }

        .offset-11 {
            margin-left: 91.666667%
        }

        @media (min-width:576px) {
            .col-sm {
                -ms-flex-preferred-size: 0;
                flex-basis: 0;
                -ms-flex-positive: 1;
                flex-grow: 1;
                max-width: 100%
            }

            .row-cols-sm-1>* {
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%
            }

            .row-cols-sm-2>* {
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%
            }

            .row-cols-sm-3>* {
                -ms-flex: 0 0 33.333333%;
                flex: 0 0 33.333333%;
                max-width: 33.333333%
            }

            .row-cols-sm-4>* {
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%
            }

            .row-cols-sm-5>* {
                -ms-flex: 0 0 20%;
                flex: 0 0 20%;
                max-width: 20%
            }

            .row-cols-sm-6>* {
                -ms-flex: 0 0 16.666667%;
                flex: 0 0 16.666667%;
                max-width: 16.666667%
            }

            .col-sm-auto {
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
                max-width: 100%
            }

            .col-sm-1 {
                -ms-flex: 0 0 8.333333%;
                flex: 0 0 8.333333%;
                max-width: 8.333333%
            }

            .col-sm-2 {
                -ms-flex: 0 0 16.666667%;
                flex: 0 0 16.666667%;
                max-width: 16.666667%
            }

            .col-sm-3 {
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%
            }

            .col-sm-4 {
                -ms-flex: 0 0 33.333333%;
                flex: 0 0 33.333333%;
                max-width: 33.333333%
            }

            .col-sm-5 {
                -ms-flex: 0 0 41.666667%;
                flex: 0 0 41.666667%;
                max-width: 41.666667%
            }

            .col-sm-6 {
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%
            }

            .col-sm-7 {
                -ms-flex: 0 0 58.333333%;
                flex: 0 0 58.333333%;
                max-width: 58.333333%
            }

            .col-sm-8 {
                -ms-flex: 0 0 66.666667%;
                flex: 0 0 66.666667%;
                max-width: 66.666667%
            }

            .col-sm-9 {
                -ms-flex: 0 0 75%;
                flex: 0 0 75%;
                max-width: 75%
            }

            .col-sm-10 {
                -ms-flex: 0 0 83.333333%;
                flex: 0 0 83.333333%;
                max-width: 83.333333%
            }

            .col-sm-11 {
                -ms-flex: 0 0 91.666667%;
                flex: 0 0 91.666667%;
                max-width: 91.666667%
            }

            .col-sm-12 {
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%
            }

            .order-sm-first {
                -ms-flex-order: -1;
                order: -1
            }

            .order-sm-last {
                -ms-flex-order: 13;
                order: 13
            }

            .order-sm-0 {
                -ms-flex-order: 0;
                order: 0
            }

            .order-sm-1 {
                -ms-flex-order: 1;
                order: 1
            }

            .order-sm-2 {
                -ms-flex-order: 2;
                order: 2
            }

            .order-sm-3 {
                -ms-flex-order: 3;
                order: 3
            }

            .order-sm-4 {
                -ms-flex-order: 4;
                order: 4
            }

            .order-sm-5 {
                -ms-flex-order: 5;
                order: 5
            }

            .order-sm-6 {
                -ms-flex-order: 6;
                order: 6
            }

            .order-sm-7 {
                -ms-flex-order: 7;
                order: 7
            }

            .order-sm-8 {
                -ms-flex-order: 8;
                order: 8
            }

            .order-sm-9 {
                -ms-flex-order: 9;
                order: 9
            }

            .order-sm-10 {
                -ms-flex-order: 10;
                order: 10
            }

            .order-sm-11 {
                -ms-flex-order: 11;
                order: 11
            }

            .order-sm-12 {
                -ms-flex-order: 12;
                order: 12
            }

            .offset-sm-0 {
                margin-left: 0
            }

            .offset-sm-1 {
                margin-left: 8.333333%
            }

            .offset-sm-2 {
                margin-left: 16.666667%
            }

            .offset-sm-3 {
                margin-left: 25%
            }

            .offset-sm-4 {
                margin-left: 33.333333%
            }

            .offset-sm-5 {
                margin-left: 41.666667%
            }

            .offset-sm-6 {
                margin-left: 50%
            }

            .offset-sm-7 {
                margin-left: 58.333333%
            }

            .offset-sm-8 {
                margin-left: 66.666667%
            }

            .offset-sm-9 {
                margin-left: 75%
            }

            .offset-sm-10 {
                margin-left: 83.333333%
            }

            .offset-sm-11 {
                margin-left: 91.666667%
            }
        }

        @media (min-width:768px) {
            .col-md {
                -ms-flex-preferred-size: 0;
                flex-basis: 0;
                -ms-flex-positive: 1;
                flex-grow: 1;
                max-width: 100%
            }

            .row-cols-md-1>* {
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%
            }

            .row-cols-md-2>* {
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%
            }

            .row-cols-md-3>* {
                -ms-flex: 0 0 33.333333%;
                flex: 0 0 33.333333%;
                max-width: 33.333333%
            }

            .row-cols-md-4>* {
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%
            }

            .row-cols-md-5>* {
                -ms-flex: 0 0 20%;
                flex: 0 0 20%;
                max-width: 20%
            }

            .row-cols-md-6>* {
                -ms-flex: 0 0 16.666667%;
                flex: 0 0 16.666667%;
                max-width: 16.666667%
            }

            .col-md-auto {
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
                max-width: 100%
            }

            .col-md-1 {
                -ms-flex: 0 0 8.333333%;
                flex: 0 0 8.333333%;
                max-width: 8.333333%
            }

            .col-md-2 {
                -ms-flex: 0 0 16.666667%;
                flex: 0 0 16.666667%;
                max-width: 16.666667%
            }

            .col-md-3 {
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%
            }

            .col-md-4 {
                -ms-flex: 0 0 33.333333%;
                flex: 0 0 33.333333%;
                max-width: 33.333333%
            }

            .col-md-5 {
                -ms-flex: 0 0 41.666667%;
                flex: 0 0 41.666667%;
                max-width: 41.666667%
            }

            .col-md-6 {
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%
            }

            .col-md-7 {
                -ms-flex: 0 0 58.333333%;
                flex: 0 0 58.333333%;
                max-width: 58.333333%
            }

            .col-md-8 {
                -ms-flex: 0 0 66.666667%;
                flex: 0 0 66.666667%;
                max-width: 66.666667%
            }

            .col-md-9 {
                -ms-flex: 0 0 75%;
                flex: 0 0 75%;
                max-width: 75%
            }

            .col-md-10 {
                -ms-flex: 0 0 83.333333%;
                flex: 0 0 83.333333%;
                max-width: 83.333333%
            }

            .col-md-11 {
                -ms-flex: 0 0 91.666667%;
                flex: 0 0 91.666667%;
                max-width: 91.666667%
            }

            .col-md-12 {
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%
            }

            .order-md-first {
                -ms-flex-order: -1;
                order: -1
            }

            .order-md-last {
                -ms-flex-order: 13;
                order: 13
            }

            .order-md-0 {
                -ms-flex-order: 0;
                order: 0
            }

            .order-md-1 {
                -ms-flex-order: 1;
                order: 1
            }

            .order-md-2 {
                -ms-flex-order: 2;
                order: 2
            }

            .order-md-3 {
                -ms-flex-order: 3;
                order: 3
            }

            .order-md-4 {
                -ms-flex-order: 4;
                order: 4
            }

            .order-md-5 {
                -ms-flex-order: 5;
                order: 5
            }

            .order-md-6 {
                -ms-flex-order: 6;
                order: 6
            }

            .order-md-7 {
                -ms-flex-order: 7;
                order: 7
            }

            .order-md-8 {
                -ms-flex-order: 8;
                order: 8
            }

            .order-md-9 {
                -ms-flex-order: 9;
                order: 9
            }

            .order-md-10 {
                -ms-flex-order: 10;
                order: 10
            }

            .order-md-11 {
                -ms-flex-order: 11;
                order: 11
            }

            .order-md-12 {
                -ms-flex-order: 12;
                order: 12
            }

            .offset-md-0 {
                margin-left: 0
            }

            .offset-md-1 {
                margin-left: 8.333333%
            }

            .offset-md-2 {
                margin-left: 16.666667%
            }

            .offset-md-3 {
                margin-left: 25%
            }

            .offset-md-4 {
                margin-left: 33.333333%
            }

            .offset-md-5 {
                margin-left: 41.666667%
            }

            .offset-md-6 {
                margin-left: 50%
            }

            .offset-md-7 {
                margin-left: 58.333333%
            }

            .offset-md-8 {
                margin-left: 66.666667%
            }

            .offset-md-9 {
                margin-left: 75%
            }

            .offset-md-10 {
                margin-left: 83.333333%
            }

            .offset-md-11 {
                margin-left: 91.666667%
            }
        }

        @media (min-width:992px) {
            .col-lg {
                -ms-flex-preferred-size: 0;
                flex-basis: 0;
                -ms-flex-positive: 1;
                flex-grow: 1;
                max-width: 100%
            }

            .row-cols-lg-1>* {
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%
            }

            .row-cols-lg-2>* {
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%
            }

            .row-cols-lg-3>* {
                -ms-flex: 0 0 33.333333%;
                flex: 0 0 33.333333%;
                max-width: 33.333333%
            }

            .row-cols-lg-4>* {
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%
            }

            .row-cols-lg-5>* {
                -ms-flex: 0 0 20%;
                flex: 0 0 20%;
                max-width: 20%
            }

            .row-cols-lg-6>* {
                -ms-flex: 0 0 16.666667%;
                flex: 0 0 16.666667%;
                max-width: 16.666667%
            }

            .col-lg-auto {
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
                max-width: 100%
            }

            .col-lg-1 {
                -ms-flex: 0 0 8.333333%;
                flex: 0 0 8.333333%;
                max-width: 8.333333%
            }

            .col-lg-2 {
                -ms-flex: 0 0 16.666667%;
                flex: 0 0 16.666667%;
                max-width: 16.666667%
            }

            .col-lg-3 {
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%
            }

            .col-lg-4 {
                -ms-flex: 0 0 33.333333%;
                flex: 0 0 33.333333%;
                max-width: 33.333333%
            }

            .col-lg-5 {
                -ms-flex: 0 0 41.666667%;
                flex: 0 0 41.666667%;
                max-width: 41.666667%
            }

            .col-lg-6 {
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%
            }

            .col-lg-7 {
                -ms-flex: 0 0 58.333333%;
                flex: 0 0 58.333333%;
                max-width: 58.333333%
            }

            .col-lg-8 {
                -ms-flex: 0 0 66.666667%;
                flex: 0 0 66.666667%;
                max-width: 66.666667%
            }

            .col-lg-9 {
                -ms-flex: 0 0 75%;
                flex: 0 0 75%;
                max-width: 75%
            }

            .col-lg-10 {
                -ms-flex: 0 0 83.333333%;
                flex: 0 0 83.333333%;
                max-width: 83.333333%
            }

            .col-lg-11 {
                -ms-flex: 0 0 91.666667%;
                flex: 0 0 91.666667%;
                max-width: 91.666667%
            }

            .col-lg-12 {
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%
            }

            .order-lg-first {
                -ms-flex-order: -1;
                order: -1
            }

            .order-lg-last {
                -ms-flex-order: 13;
                order: 13
            }

            .order-lg-0 {
                -ms-flex-order: 0;
                order: 0
            }

            .order-lg-1 {
                -ms-flex-order: 1;
                order: 1
            }

            .order-lg-2 {
                -ms-flex-order: 2;
                order: 2
            }

            .order-lg-3 {
                -ms-flex-order: 3;
                order: 3
            }

            .order-lg-4 {
                -ms-flex-order: 4;
                order: 4
            }

            .order-lg-5 {
                -ms-flex-order: 5;
                order: 5
            }

            .order-lg-6 {
                -ms-flex-order: 6;
                order: 6
            }

            .order-lg-7 {
                -ms-flex-order: 7;
                order: 7
            }

            .order-lg-8 {
                -ms-flex-order: 8;
                order: 8
            }

            .order-lg-9 {
                -ms-flex-order: 9;
                order: 9
            }

            .order-lg-10 {
                -ms-flex-order: 10;
                order: 10
            }

            .order-lg-11 {
                -ms-flex-order: 11;
                order: 11
            }

            .order-lg-12 {
                -ms-flex-order: 12;
                order: 12
            }

            .offset-lg-0 {
                margin-left: 0
            }

            .offset-lg-1 {
                margin-left: 8.333333%
            }

            .offset-lg-2 {
                margin-left: 16.666667%
            }

            .offset-lg-3 {
                margin-left: 25%
            }

            .offset-lg-4 {
                margin-left: 33.333333%
            }

            .offset-lg-5 {
                margin-left: 41.666667%
            }

            .offset-lg-6 {
                margin-left: 50%
            }

            .offset-lg-7 {
                margin-left: 58.333333%
            }

            .offset-lg-8 {
                margin-left: 66.666667%
            }

            .offset-lg-9 {
                margin-left: 75%
            }

            .offset-lg-10 {
                margin-left: 83.333333%
            }

            .offset-lg-11 {
                margin-left: 91.666667%
            }
        }

        @media (min-width:1200px) {
            .col-xl {
                -ms-flex-preferred-size: 0;
                flex-basis: 0;
                -ms-flex-positive: 1;
                flex-grow: 1;
                max-width: 100%
            }

            .row-cols-xl-1>* {
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%
            }

            .row-cols-xl-2>* {
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%
            }

            .row-cols-xl-3>* {
                -ms-flex: 0 0 33.333333%;
                flex: 0 0 33.333333%;
                max-width: 33.333333%
            }

            .row-cols-xl-4>* {
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%
            }

            .row-cols-xl-5>* {
                -ms-flex: 0 0 20%;
                flex: 0 0 20%;
                max-width: 20%
            }

            .row-cols-xl-6>* {
                -ms-flex: 0 0 16.666667%;
                flex: 0 0 16.666667%;
                max-width: 16.666667%
            }

            .col-xl-auto {
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
                max-width: 100%
            }

            .col-xl-1 {
                -ms-flex: 0 0 8.333333%;
                flex: 0 0 8.333333%;
                max-width: 8.333333%
            }

            .col-xl-2 {
                -ms-flex: 0 0 16.666667%;
                flex: 0 0 16.666667%;
                max-width: 16.666667%
            }

            .col-xl-3 {
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%
            }

            .col-xl-4 {
                -ms-flex: 0 0 33.333333%;
                flex: 0 0 33.333333%;
                max-width: 33.333333%
            }

            .col-xl-5 {
                -ms-flex: 0 0 41.666667%;
                flex: 0 0 41.666667%;
                max-width: 41.666667%
            }

            .col-xl-6 {
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%
            }

            .col-xl-7 {
                -ms-flex: 0 0 58.333333%;
                flex: 0 0 58.333333%;
                max-width: 58.333333%
            }

            .col-xl-8 {
                -ms-flex: 0 0 66.666667%;
                flex: 0 0 66.666667%;
                max-width: 66.666667%
            }

            .col-xl-9 {
                -ms-flex: 0 0 75%;
                flex: 0 0 75%;
                max-width: 75%
            }

            .col-xl-10 {
                -ms-flex: 0 0 83.333333%;
                flex: 0 0 83.333333%;
                max-width: 83.333333%
            }

            .col-xl-11 {
                -ms-flex: 0 0 91.666667%;
                flex: 0 0 91.666667%;
                max-width: 91.666667%
            }

            .col-xl-12 {
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%
            }

            .order-xl-first {
                -ms-flex-order: -1;
                order: -1
            }

            .order-xl-last {
                -ms-flex-order: 13;
                order: 13
            }

            .order-xl-0 {
                -ms-flex-order: 0;
                order: 0
            }

            .order-xl-1 {
                -ms-flex-order: 1;
                order: 1
            }

            .order-xl-2 {
                -ms-flex-order: 2;
                order: 2
            }

            .order-xl-3 {
                -ms-flex-order: 3;
                order: 3
            }

            .order-xl-4 {
                -ms-flex-order: 4;
                order: 4
            }

            .order-xl-5 {
                -ms-flex-order: 5;
                order: 5
            }

            .order-xl-6 {
                -ms-flex-order: 6;
                order: 6
            }

            .order-xl-7 {
                -ms-flex-order: 7;
                order: 7
            }

            .order-xl-8 {
                -ms-flex-order: 8;
                order: 8
            }

            .order-xl-9 {
                -ms-flex-order: 9;
                order: 9
            }

            .order-xl-10 {
                -ms-flex-order: 10;
                order: 10
            }

            .order-xl-11 {
                -ms-flex-order: 11;
                order: 11
            }

            .order-xl-12 {
                -ms-flex-order: 12;
                order: 12
            }

            .offset-xl-0 {
                margin-left: 0
            }

            .offset-xl-1 {
                margin-left: 8.333333%
            }

            .offset-xl-2 {
                margin-left: 16.666667%
            }

            .offset-xl-3 {
                margin-left: 25%
            }

            .offset-xl-4 {
                margin-left: 33.333333%
            }

            .offset-xl-5 {
                margin-left: 41.666667%
            }

            .offset-xl-6 {
                margin-left: 50%
            }

            .offset-xl-7 {
                margin-left: 58.333333%
            }

            .offset-xl-8 {
                margin-left: 66.666667%
            }

            .offset-xl-9 {
                margin-left: 75%
            }

            .offset-xl-10 {
                margin-left: 83.333333%
            }

            .offset-xl-11 {
                margin-left: 91.666667%
            }
        }

        .table {
            width: 100%;
            margin-bottom: 1rem;
            color: #212529
        }

        .table td,
        .table th {
            padding: .75rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6
        }

        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #dee2e6
        }

        .table tbody+tbody {
            border-top: 2px solid #dee2e6
        }

        .table-sm td,
        .table-sm th {
            padding: .3rem
        }

        .table-bordered {
            border: 1px solid #dee2e6
        }

        .table-bordered td,
        .table-bordered th {
            border: 1px solid #dee2e6
        }

        .table-bordered thead td,
        .table-bordered thead th {
            border-bottom-width: 2px
        }

        .table-borderless tbody+tbody,
        .table-borderless td,
        .table-borderless th,
        .table-borderless thead th {
            border: 0
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 0, 0, .05)
        }

        .table-hover tbody tr:hover {
            color: #212529;
            background-color: rgba(0, 0, 0, .075)
        }

        .table-primary,
        .table-primary>td,
        .table-primary>th {
            background-color: #b8daff
        }

        .table-primary tbody+tbody,
        .table-primary td,
        .table-primary th,
        .table-primary thead th {
            border-color: #7abaff
        }

        .table-hover .table-primary:hover {
            background-color: #9fcdff
        }

        .table-hover .table-primary:hover>td,
        .table-hover .table-primary:hover>th {
            background-color: #9fcdff
        }

        .table-secondary,
        .table-secondary>td,
        .table-secondary>th {
            background-color: #d6d8db
        }

        .table-secondary tbody+tbody,
        .table-secondary td,
        .table-secondary th,
        .table-secondary thead th {
            border-color: #b3b7bb
        }

        .table-hover .table-secondary:hover {
            background-color: #c8cbcf
        }

        .table-hover .table-secondary:hover>td,
        .table-hover .table-secondary:hover>th {
            background-color: #c8cbcf
        }

        .table-success,
        .table-success>td,
        .table-success>th {
            background-color: #c3e6cb
        }

        .table-success tbody+tbody,
        .table-success td,
        .table-success th,
        .table-success thead th {
            border-color: #8fd19e
        }

        .table-hover .table-success:hover {
            background-color: #b1dfbb
        }

        .table-hover .table-success:hover>td,
        .table-hover .table-success:hover>th {
            background-color: #b1dfbb
        }

        .table-info,
        .table-info>td,
        .table-info>th {
            background-color: #bee5eb
        }

        .table-info tbody+tbody,
        .table-info td,
        .table-info th,
        .table-info thead th {
            border-color: #86cfda
        }

        .table-hover .table-info:hover {
            background-color: #abdde5
        }

        .table-hover .table-info:hover>td,
        .table-hover .table-info:hover>th {
            background-color: #abdde5
        }

        .table-warning,
        .table-warning>td,
        .table-warning>th {
            background-color: #ffeeba
        }

        .table-warning tbody+tbody,
        .table-warning td,
        .table-warning th,
        .table-warning thead th {
            border-color: #ffdf7e
        }

        .table-hover .table-warning:hover {
            background-color: #ffe8a1
        }

        .table-hover .table-warning:hover>td,
        .table-hover .table-warning:hover>th {
            background-color: #ffe8a1
        }

        .table-danger,
        .table-danger>td,
        .table-danger>th {
            background-color: #f5c6cb
        }

        .table-danger tbody+tbody,
        .table-danger td,
        .table-danger th,
        .table-danger thead th {
            border-color: #ed969e
        }

        .table-hover .table-danger:hover {
            background-color: #f1b0b7
        }

        .table-hover .table-danger:hover>td,
        .table-hover .table-danger:hover>th {
            background-color: #f1b0b7
        }

        .table-light,
        .table-light>td,
        .table-light>th {
            background-color: #fdfdfe
        }

        .table-light tbody+tbody,
        .table-light td,
        .table-light th,
        .table-light thead th {
            border-color: #fbfcfc
        }

        .table-hover .table-light:hover {
            background-color: #ececf6
        }

        .table-hover .table-light:hover>td,
        .table-hover .table-light:hover>th {
            background-color: #ececf6
        }

        .table-dark,
        .table-dark>td,
        .table-dark>th {
            background-color: #c6c8ca
        }

        .table-dark tbody+tbody,
        .table-dark td,
        .table-dark th,
        .table-dark thead th {
            border-color: #95999c
        }

        .table-hover .table-dark:hover {
            background-color: #b9bbbe
        }

        .table-hover .table-dark:hover>td,
        .table-hover .table-dark:hover>th {
            background-color: #b9bbbe
        }

        .table-active,
        .table-active>td,
        .table-active>th {
            background-color: rgba(0, 0, 0, .075)
        }

        .table-hover .table-active:hover {
            background-color: rgba(0, 0, 0, .075)
        }

        .table-hover .table-active:hover>td,
        .table-hover .table-active:hover>th {
            background-color: rgba(0, 0, 0, .075)
        }

        .table .thead-dark th {
            color: #fff;
            background-color: #343a40;
            border-color: #454d55
        }

        .table .thead-light th {
            color: #495057;
            background-color: #e9ecef;
            border-color: #dee2e6
        }

        .table-dark {
            color: #fff;
            background-color: #343a40
        }

        .table-dark td,
        .table-dark th,
        .table-dark thead th {
            border-color: #454d55
        }

        .table-dark.table-bordered {
            border: 0
        }

        .table-dark.table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(255, 255, 255, .05)
        }

        .table-dark.table-hover tbody tr:hover {
            color: #fff;
            background-color: rgba(255, 255, 255, .075)
        }

        @media (max-width:575.98px) {
            .table-responsive-sm {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch
            }

            .table-responsive-sm>.table-bordered {
                border: 0
            }
        }

        @media (max-width:767.98px) {
            .table-responsive-md {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch
            }

            .table-responsive-md>.table-bordered {
                border: 0
            }
        }

        @media (max-width:991.98px) {
            .table-responsive-lg {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch
            }

            .table-responsive-lg>.table-bordered {
                border: 0
            }
        }

        @media (max-width:1199.98px) {
            .table-responsive-xl {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch
            }

            .table-responsive-xl>.table-bordered {
                border: 0
            }
        }

        .table-responsive {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch
        }

        .table-responsive>.table-bordered {
            border: 0
        }

        .form-control {
            display: block;
            width: 100%;
            height: calc(1.5em + .75rem + 2px);
            padding: .375rem .75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: .25rem;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out
        }

        @media (prefers-reduced-motion:reduce) {
            .form-control {
                transition: none
            }
        }

        .form-control::-ms-expand {
            background-color: transparent;
            border: 0
        }

        .form-control:-moz-focusring {
            color: transparent;
            text-shadow: 0 0 0 #495057
        }

        .form-control:focus {
            color: #495057;
            background-color: #fff;
            border-color: #80bdff;
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .25)
        }

        .form-control::-webkit-input-placeholder {
            color: #6c757d;
            opacity: 1
        }

        .form-control::-moz-placeholder {
            color: #6c757d;
            opacity: 1
        }

        .form-control:-ms-input-placeholder {
            color: #6c757d;
            opacity: 1
        }

        .form-control::-ms-input-placeholder {
            color: #6c757d;
            opacity: 1
        }

        .form-control::placeholder {
            color: #6c757d;
            opacity: 1
        }

        .form-control:disabled,
        .form-control[readonly] {
            background-color: #e9ecef;
            opacity: 1
        }

        input[type=date].form-control,
        input[type=datetime-local].form-control,
        input[type=month].form-control,
        input[type=time].form-control {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none
        }

        select.form-control:focus::-ms-value {
            color: #495057;
            background-color: #fff
        }

        .form-control-file,
        .form-control-range {
            display: block;
            width: 100%
        }

        .col-form-label {
            padding-top: calc(.375rem + 1px);
            padding-bottom: calc(.375rem + 1px);
            margin-bottom: 0;
            font-size: inherit;
            line-height: 1.5
        }

        .col-form-label-lg {
            padding-top: calc(.5rem + 1px);
            padding-bottom: calc(.5rem + 1px);
            font-size: 1.25rem;
            line-height: 1.5
        }

        .col-form-label-sm {
            padding-top: calc(.25rem + 1px);
            padding-bottom: calc(.25rem + 1px);
            font-size: .875rem;
            line-height: 1.5
        }

        .form-control-plaintext {
            display: block;
            width: 100%;
            padding: .375rem 0;
            margin-bottom: 0;
            font-size: 1rem;
            line-height: 1.5;
            color: #212529;
            background-color: transparent;
            border: solid transparent;
            border-width: 1px 0
        }

        .form-control-plaintext.form-control-lg,
        .form-control-plaintext.form-control-sm {
            padding-right: 0;
            padding-left: 0
        }

        .form-control-sm {
            height: calc(1.5em + .5rem + 2px);
            padding: .25rem .5rem;
            font-size: .875rem;
            line-height: 1.5;
            border-radius: .2rem
        }

        .form-control-lg {
            height: calc(1.5em + 1rem + 2px);
            padding: .5rem 1rem;
            font-size: 1.25rem;
            line-height: 1.5;
            border-radius: .3rem
        }

        select.form-control[multiple],
        select.form-control[size] {
            height: auto
        }

        textarea.form-control {
            height: auto
        }

        .form-group {
            margin-bottom: 1rem
        }

        .form-text {
            display: block;
            margin-top: .25rem
        }

        .form-row {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -5px;
            margin-left: -5px
        }

        .form-row>.col,
        .form-row>[class*=col-] {
            padding-right: 5px;
            padding-left: 5px
        }

        .form-check {
            position: relative;
            display: block;
            padding-left: 1.25rem
        }

        .form-check-input {
            position: absolute;
            margin-top: .3rem;
            margin-left: -1.25rem
        }

        .form-check-input:disabled~.form-check-label,
        .form-check-input[disabled]~.form-check-label {
            color: #6c757d
        }

        .form-check-label {
            margin-bottom: 0
        }

        .form-check-inline {
            display: -ms-inline-flexbox;
            display: inline-flex;
            -ms-flex-align: center;
            align-items: center;
            padding-left: 0;
            margin-right: .75rem
        }

        .form-check-inline .form-check-input {
            position: static;
            margin-top: 0;
            margin-right: .3125rem;
            margin-left: 0
        }

        .valid-feedback {
            display: none;
            width: 100%;
            margin-top: .25rem;
            font-size: 80%;
            color: #28a745
        }

        .valid-tooltip {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 5;
            display: none;
            max-width: 100%;
            padding: .25rem .5rem;
            margin-top: .1rem;
            font-size: .875rem;
            line-height: 1.5;
            color: #fff;
            background-color: rgba(40, 167, 69, .9);
            border-radius: .25rem
        }

        .form-row>.col>.valid-tooltip,
        .form-row>[class*=col-]>.valid-tooltip {
            left: 5px
        }

        .is-valid~.valid-feedback,
        .is-valid~.valid-tooltip,
        .was-validated :valid~.valid-feedback,
        .was-validated :valid~.valid-tooltip {
            display: block
        }

        .form-control.is-valid,
        .was-validated .form-control:valid {
            border-color: #28a745;
            padding-right: calc(1.5em + .75rem);
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right calc(.375em + .1875rem) center;
            background-size: calc(.75em + .375rem) calc(.75em + .375rem)
        }

        .form-control.is-valid:focus,
        .was-validated .form-control:valid:focus {
            border-color: #28a745;
            box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .25)
        }

        .was-validated textarea.form-control:valid,
        textarea.form-control.is-valid {
            padding-right: calc(1.5em + .75rem);
            background-position: top calc(.375em + .1875rem) right calc(.375em + .1875rem)
        }

        .custom-select.is-valid,
        .was-validated .custom-select:valid {
            border-color: #28a745;
            padding-right: calc(.75em + 2.3125rem);
            background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") right .75rem center/8px 10px no-repeat, #fff url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e") center right 1.75rem/calc(.75em + .375rem) calc(.75em + .375rem) no-repeat
        }

        .custom-select.is-valid:focus,
        .was-validated .custom-select:valid:focus {
            border-color: #28a745;
            box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .25)
        }

        .form-check-input.is-valid~.form-check-label,
        .was-validated .form-check-input:valid~.form-check-label {
            color: #28a745
        }

        .form-check-input.is-valid~.valid-feedback,
        .form-check-input.is-valid~.valid-tooltip,
        .was-validated .form-check-input:valid~.valid-feedback,
        .was-validated .form-check-input:valid~.valid-tooltip {
            display: block
        }

        .custom-control-input.is-valid~.custom-control-label,
        .was-validated .custom-control-input:valid~.custom-control-label {
            color: #28a745
        }

        .custom-control-input.is-valid~.custom-control-label::before,
        .was-validated .custom-control-input:valid~.custom-control-label::before {
            border-color: #28a745
        }

        .custom-control-input.is-valid:checked~.custom-control-label::before,
        .was-validated .custom-control-input:valid:checked~.custom-control-label::before {
            border-color: #34ce57;
            background-color: #34ce57
        }

        .custom-control-input.is-valid:focus~.custom-control-label::before,
        .was-validated .custom-control-input:valid:focus~.custom-control-label::before {
            box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .25)
        }

        .custom-control-input.is-valid:focus:not(:checked)~.custom-control-label::before,
        .was-validated .custom-control-input:valid:focus:not(:checked)~.custom-control-label::before {
            border-color: #28a745
        }

        .custom-file-input.is-valid~.custom-file-label,
        .was-validated .custom-file-input:valid~.custom-file-label {
            border-color: #28a745
        }

        .custom-file-input.is-valid:focus~.custom-file-label,
        .was-validated .custom-file-input:valid:focus~.custom-file-label {
            border-color: #28a745;
            box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .25)
        }

        .invalid-feedback {
            display: none;
            width: 100%;
            margin-top: .25rem;
            font-size: 80%;
            color: #dc3545
        }

        .invalid-tooltip {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 5;
            display: none;
            max-width: 100%;
            padding: .25rem .5rem;
            margin-top: .1rem;
            font-size: .875rem;
            line-height: 1.5;
            color: #fff;
            background-color: rgba(220, 53, 69, .9);
            border-radius: .25rem
        }

        .form-row>.col>.invalid-tooltip,
        .form-row>[class*=col-]>.invalid-tooltip {
            left: 5px
        }

        .is-invalid~.invalid-feedback,
        .is-invalid~.invalid-tooltip,
        .was-validated :invalid~.invalid-feedback,
        .was-validated :invalid~.invalid-tooltip {
            display: block
        }

        .form-control.is-invalid,
        .was-validated .form-control:invalid {
            border-color: #dc3545;
            padding-right: calc(1.5em + .75rem);
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23dc3545' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right calc(.375em + .1875rem) center;
            background-size: calc(.75em + .375rem) calc(.75em + .375rem)
        }

        .form-control.is-invalid:focus,
        .was-validated .form-control:invalid:focus {
            border-color: #dc3545;
            box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .25)
        }

        .was-validated textarea.form-control:invalid,
        textarea.form-control.is-invalid {
            padding-right: calc(1.5em + .75rem);
            background-position: top calc(.375em + .1875rem) right calc(.375em + .1875rem)
        }

        .custom-select.is-invalid,
        .was-validated .custom-select:invalid {
            border-color: #dc3545;
            padding-right: calc(.75em + 2.3125rem);
            background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") right .75rem center/8px 10px no-repeat, #fff url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23dc3545' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e") center right 1.75rem/calc(.75em + .375rem) calc(.75em + .375rem) no-repeat
        }

        .custom-select.is-invalid:focus,
        .was-validated .custom-select:invalid:focus {
            border-color: #dc3545;
            box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .25)
        }

        .form-check-input.is-invalid~.form-check-label,
        .was-validated .form-check-input:invalid~.form-check-label {
            color: #dc3545
        }

        .form-check-input.is-invalid~.invalid-feedback,
        .form-check-input.is-invalid~.invalid-tooltip,
        .was-validated .form-check-input:invalid~.invalid-feedback,
        .was-validated .form-check-input:invalid~.invalid-tooltip {
            display: block
        }

        .custom-control-input.is-invalid~.custom-control-label,
        .was-validated .custom-control-input:invalid~.custom-control-label {
            color: #dc3545
        }

        .custom-control-input.is-invalid~.custom-control-label::before,
        .was-validated .custom-control-input:invalid~.custom-control-label::before {
            border-color: #dc3545
        }

        .custom-control-input.is-invalid:checked~.custom-control-label::before,
        .was-validated .custom-control-input:invalid:checked~.custom-control-label::before {
            border-color: #e4606d;
            background-color: #e4606d
        }

        .custom-control-input.is-invalid:focus~.custom-control-label::before,
        .was-validated .custom-control-input:invalid:focus~.custom-control-label::before {
            box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .25)
        }

        .custom-control-input.is-invalid:focus:not(:checked)~.custom-control-label::before,
        .was-validated .custom-control-input:invalid:focus:not(:checked)~.custom-control-label::before {
            border-color: #dc3545
        }

        .custom-file-input.is-invalid~.custom-file-label,
        .was-validated .custom-file-input:invalid~.custom-file-label {
            border-color: #dc3545
        }

        .custom-file-input.is-invalid:focus~.custom-file-label,
        .was-validated .custom-file-input:invalid:focus~.custom-file-label {
            border-color: #dc3545;
            box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .25)
        }

        .form-inline {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-flow: row wrap;
            flex-flow: row wrap;
            -ms-flex-align: center;
            align-items: center
        }

        .form-inline .form-check {
            width: 100%
        }

        @media (min-width:576px) {
            .form-inline label {
                display: -ms-flexbox;
                display: flex;
                -ms-flex-align: center;
                align-items: center;
                -ms-flex-pack: center;
                justify-content: center;
                margin-bottom: 0
            }

            .form-inline .form-group {
                display: -ms-flexbox;
                display: flex;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                -ms-flex-flow: row wrap;
                flex-flow: row wrap;
                -ms-flex-align: center;
                align-items: center;
                margin-bottom: 0
            }

            .form-inline .form-control {
                display: inline-block;
                width: auto;
                vertical-align: middle
            }

            .form-inline .form-control-plaintext {
                display: inline-block
            }

            .form-inline .custom-select,
            .form-inline .input-group {
                width: auto
            }

            .form-inline .form-check {
                display: -ms-flexbox;
                display: flex;
                -ms-flex-align: center;
                align-items: center;
                -ms-flex-pack: center;
                justify-content: center;
                width: auto;
                padding-left: 0
            }

            .form-inline .form-check-input {
                position: relative;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                margin-top: 0;
                margin-right: .25rem;
                margin-left: 0
            }

            .form-inline .custom-control {
                -ms-flex-align: center;
                align-items: center;
                -ms-flex-pack: center;
                justify-content: center
            }

            .form-inline .custom-control-label {
                margin-bottom: 0
            }
        }

        .btn {
            display: inline-block;
            font-weight: 400;
            color: #212529;
            text-align: center;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-color: transparent;
            border: 1px solid transparent;
            padding: .375rem .75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: .25rem;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out
        }

        @media (prefers-reduced-motion:reduce) {
            .btn {
                transition: none
            }
        }

        .btn:hover {
            color: #212529;
            text-decoration: none
        }

        .btn.focus,
        .btn:focus {
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .25)
        }

        .btn.disabled,
        .btn:disabled {
            opacity: .65
        }

        .btn:not(:disabled):not(.disabled) {
            cursor: pointer
        }

        a.btn.disabled,
        fieldset:disabled a.btn {
            pointer-events: none
        }

        .btn-primary {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff
        }

        .btn-primary:hover {
            color: #fff;
            background-color: #0069d9;
            border-color: #0062cc
        }

        .btn-primary.focus,
        .btn-primary:focus {
            color: #fff;
            background-color: #0069d9;
            border-color: #0062cc;
            box-shadow: 0 0 0 .2rem rgba(38, 143, 255, .5)
        }

        .btn-primary.disabled,
        .btn-primary:disabled {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff
        }

        .btn-primary:not(:disabled):not(.disabled).active,
        .btn-primary:not(:disabled):not(.disabled):active,
        .show>.btn-primary.dropdown-toggle {
            color: #fff;
            background-color: #0062cc;
            border-color: #005cbf
        }

        .btn-primary:not(:disabled):not(.disabled).active:focus,
        .btn-primary:not(:disabled):not(.disabled):active:focus,
        .show>.btn-primary.dropdown-toggle:focus {
            box-shadow: 0 0 0 .2rem rgba(38, 143, 255, .5)
        }

        .btn-secondary {
            color: #fff;
            background-color: #6c757d;
            border-color: #6c757d
        }

        .btn-secondary:hover {
            color: #fff;
            background-color: #5a6268;
            border-color: #545b62
        }

        .btn-secondary.focus,
        .btn-secondary:focus {
            color: #fff;
            background-color: #5a6268;
            border-color: #545b62;
            box-shadow: 0 0 0 .2rem rgba(130, 138, 145, .5)
        }

        .btn-secondary.disabled,
        .btn-secondary:disabled {
            color: #fff;
            background-color: #6c757d;
            border-color: #6c757d
        }

        .btn-secondary:not(:disabled):not(.disabled).active,
        .btn-secondary:not(:disabled):not(.disabled):active,
        .show>.btn-secondary.dropdown-toggle {
            color: #fff;
            background-color: #545b62;
            border-color: #4e555b
        }

        .btn-secondary:not(:disabled):not(.disabled).active:focus,
        .btn-secondary:not(:disabled):not(.disabled):active:focus,
        .show>.btn-secondary.dropdown-toggle:focus {
            box-shadow: 0 0 0 .2rem rgba(130, 138, 145, .5)
        }

        .btn-success {
            color: #fff;
            background-color: #28a745;
            border-color: #28a745
        }

        .btn-success:hover {
            color: #fff;
            background-color: #218838;
            border-color: #1e7e34
        }

        .btn-success.focus,
        .btn-success:focus {
            color: #fff;
            background-color: #218838;
            border-color: #1e7e34;
            box-shadow: 0 0 0 .2rem rgba(72, 180, 97, .5)
        }

        .btn-success.disabled,
        .btn-success:disabled {
            color: #fff;
            background-color: #28a745;
            border-color: #28a745
        }

        .btn-success:not(:disabled):not(.disabled).active,
        .btn-success:not(:disabled):not(.disabled):active,
        .show>.btn-success.dropdown-toggle {
            color: #fff;
            background-color: #1e7e34;
            border-color: #1c7430
        }

        .btn-success:not(:disabled):not(.disabled).active:focus,
        .btn-success:not(:disabled):not(.disabled):active:focus,
        .show>.btn-success.dropdown-toggle:focus {
            box-shadow: 0 0 0 .2rem rgba(72, 180, 97, .5)
        }

        .btn-info {
            color: #fff;
            background-color: #17a2b8;
            border-color: #17a2b8
        }

        .btn-info:hover {
            color: #fff;
            background-color: #138496;
            border-color: #117a8b
        }

        .btn-info.focus,
        .btn-info:focus {
            color: #fff;
            background-color: #138496;
            border-color: #117a8b;
            box-shadow: 0 0 0 .2rem rgba(58, 176, 195, .5)
        }

        .btn-info.disabled,
        .btn-info:disabled {
            color: #fff;
            background-color: #17a2b8;
            border-color: #17a2b8
        }

        .btn-info:not(:disabled):not(.disabled).active,
        .btn-info:not(:disabled):not(.disabled):active,
        .show>.btn-info.dropdown-toggle {
            color: #fff;
            background-color: #117a8b;
            border-color: #10707f
        }

        .btn-info:not(:disabled):not(.disabled).active:focus,
        .btn-info:not(:disabled):not(.disabled):active:focus,
        .show>.btn-info.dropdown-toggle:focus {
            box-shadow: 0 0 0 .2rem rgba(58, 176, 195, .5)
        }

        .btn-warning {
            color: #212529;
            background-color: #ffc107;
            border-color: #ffc107
        }

        .btn-warning:hover {
            color: #212529;
            background-color: #e0a800;
            border-color: #d39e00
        }

        .btn-warning.focus,
        .btn-warning:focus {
            color: #212529;
            background-color: #e0a800;
            border-color: #d39e00;
            box-shadow: 0 0 0 .2rem rgba(222, 170, 12, .5)
        }

        .btn-warning.disabled,
        .btn-warning:disabled {
            color: #212529;
            background-color: #ffc107;
            border-color: #ffc107
        }

        .btn-warning:not(:disabled):not(.disabled).active,
        .btn-warning:not(:disabled):not(.disabled):active,
        .show>.btn-warning.dropdown-toggle {
            color: #212529;
            background-color: #d39e00;
            border-color: #c69500
        }

        .btn-warning:not(:disabled):not(.disabled).active:focus,
        .btn-warning:not(:disabled):not(.disabled):active:focus,
        .show>.btn-warning.dropdown-toggle:focus {
            box-shadow: 0 0 0 .2rem rgba(222, 170, 12, .5)
        }

        .btn-danger {
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545
        }

        .btn-danger:hover {
            color: #fff;
            background-color: #c82333;
            border-color: #bd2130
        }

        .btn-danger.focus,
        .btn-danger:focus {
            color: #fff;
            background-color: #c82333;
            border-color: #bd2130;
            box-shadow: 0 0 0 .2rem rgba(225, 83, 97, .5)
        }

        .btn-danger.disabled,
        .btn-danger:disabled {
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545
        }

        .btn-danger:not(:disabled):not(.disabled).active,
        .btn-danger:not(:disabled):not(.disabled):active,
        .show>.btn-danger.dropdown-toggle {
            color: #fff;
            background-color: #bd2130;
            border-color: #b21f2d
        }

        .btn-danger:not(:disabled):not(.disabled).active:focus,
        .btn-danger:not(:disabled):not(.disabled):active:focus,
        .show>.btn-danger.dropdown-toggle:focus {
            box-shadow: 0 0 0 .2rem rgba(225, 83, 97, .5)
        }

        .btn-light {
            color: #212529;
            background-color: #f8f9fa;
            border-color: #f8f9fa
        }

        .btn-light:hover {
            color: #212529;
            background-color: #e2e6ea;
            border-color: #dae0e5
        }

        .btn-light.focus,
        .btn-light:focus {
            color: #212529;
            background-color: #e2e6ea;
            border-color: #dae0e5;
            box-shadow: 0 0 0 .2rem rgba(216, 217, 219, .5)
        }

        .btn-light.disabled,
        .btn-light:disabled {
            color: #212529;
            background-color: #f8f9fa;
            border-color: #f8f9fa
        }

        .btn-light:not(:disabled):not(.disabled).active,
        .btn-light:not(:disabled):not(.disabled):active,
        .show>.btn-light.dropdown-toggle {
            color: #212529;
            background-color: #dae0e5;
            border-color: #d3d9df
        }

        .btn-light:not(:disabled):not(.disabled).active:focus,
        .btn-light:not(:disabled):not(.disabled):active:focus,
        .show>.btn-light.dropdown-toggle:focus {
            box-shadow: 0 0 0 .2rem rgba(216, 217, 219, .5)
        }

        .btn-dark {
            color: #fff;
            background-color: #343a40;
            border-color: #343a40
        }

        .btn-dark:hover {
            color: #fff;
            background-color: #23272b;
            border-color: #1d2124
        }

        .btn-dark.focus,
        .btn-dark:focus {
            color: #fff;
            background-color: #23272b;
            border-color: #1d2124;
            box-shadow: 0 0 0 .2rem rgba(82, 88, 93, .5)
        }

        .btn-dark.disabled,
        .btn-dark:disabled {
            color: #fff;
            background-color: #343a40;
            border-color: #343a40
        }

        .btn-dark:not(:disabled):not(.disabled).active,
        .btn-dark:not(:disabled):not(.disabled):active,
        .show>.btn-dark.dropdown-toggle {
            color: #fff;
            background-color: #1d2124;
            border-color: #171a1d
        }

        .btn-dark:not(:disabled):not(.disabled).active:focus,
        .btn-dark:not(:disabled):not(.disabled):active:focus,
        .show>.btn-dark.dropdown-toggle:focus {
            box-shadow: 0 0 0 .2rem rgba(82, 88, 93, .5)
        }

        .btn-outline-primary {
            color: #007bff;
            border-color: #007bff
        }

        .btn-outline-primary:hover {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff
        }

        .btn-outline-primary.focus,
        .btn-outline-primary:focus {
            box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .5)
        }

        .btn-outline-primary.disabled,
        .btn-outline-primary:disabled {
            color: #007bff;
            background-color: transparent
        }

        .btn-outline-primary:not(:disabled):not(.disabled).active,
        .btn-outline-primary:not(:disabled):not(.disabled):active,
        .show>.btn-outline-primary.dropdown-toggle {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff
        }

        .btn-outline-primary:not(:disabled):not(.disabled).active:focus,
        .btn-outline-primary:not(:disabled):not(.disabled):active:focus,
        .show>.btn-outline-primary.dropdown-toggle:focus {
            box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .5)
        }

        .btn-outline-secondary {
            color: #6c757d;
            border-color: #6c757d
        }

        .btn-outline-secondary:hover {
            color: #fff;
            background-color: #6c757d;
            border-color: #6c757d
        }

        .btn-outline-secondary.focus,
        .btn-outline-secondary:focus {
            box-shadow: 0 0 0 .2rem rgba(108, 117, 125, .5)
        }

        .btn-outline-secondary.disabled,
        .btn-outline-secondary:disabled {
            color: #6c757d;
            background-color: transparent
        }

        .btn-outline-secondary:not(:disabled):not(.disabled).active,
        .btn-outline-secondary:not(:disabled):not(.disabled):active,
        .show>.btn-outline-secondary.dropdown-toggle {
            color: #fff;
            background-color: #6c757d;
            border-color: #6c757d
        }

        .btn-outline-secondary:not(:disabled):not(.disabled).active:focus,
        .btn-outline-secondary:not(:disabled):not(.disabled):active:focus,
        .show>.btn-outline-secondary.dropdown-toggle:focus {
            box-shadow: 0 0 0 .2rem rgba(108, 117, 125, .5)
        }

        .btn-outline-success {
            color: #28a745;
            border-color: #28a745
        }

        .btn-outline-success:hover {
            color: #fff;
            background-color: #28a745;
            border-color: #28a745
        }

        .btn-outline-success.focus,
        .btn-outline-success:focus {
            box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .5)
        }

        .btn-outline-success.disabled,
        .btn-outline-success:disabled {
            color: #28a745;
            background-color: transparent
        }

        .btn-outline-success:not(:disabled):not(.disabled).active,
        .btn-outline-success:not(:disabled):not(.disabled):active,
        .show>.btn-outline-success.dropdown-toggle {
            color: #fff;
            background-color: #28a745;
            border-color: #28a745
        }

        .btn-outline-success:not(:disabled):not(.disabled).active:focus,
        .btn-outline-success:not(:disabled):not(.disabled):active:focus,
        .show>.btn-outline-success.dropdown-toggle:focus {
            box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .5)
        }

        .btn-outline-info {
            color: #17a2b8;
            border-color: #17a2b8
        }

        .btn-outline-info:hover {
            color: #fff;
            background-color: #17a2b8;
            border-color: #17a2b8
        }

        .btn-outline-info.focus,
        .btn-outline-info:focus {
            box-shadow: 0 0 0 .2rem rgba(23, 162, 184, .5)
        }

        .btn-outline-info.disabled,
        .btn-outline-info:disabled {
            color: #17a2b8;
            background-color: transparent
        }

        .btn-outline-info:not(:disabled):not(.disabled).active,
        .btn-outline-info:not(:disabled):not(.disabled):active,
        .show>.btn-outline-info.dropdown-toggle {
            color: #fff;
            background-color: #17a2b8;
            border-color: #17a2b8
        }

        .btn-outline-info:not(:disabled):not(.disabled).active:focus,
        .btn-outline-info:not(:disabled):not(.disabled):active:focus,
        .show>.btn-outline-info.dropdown-toggle:focus {
            box-shadow: 0 0 0 .2rem rgba(23, 162, 184, .5)
        }

        .btn-outline-warning {
            color: #ffc107;
            border-color: #ffc107
        }

        .btn-outline-warning:hover {
            color: #212529;
            background-color: #ffc107;
            border-color: #ffc107
        }

        .btn-outline-warning.focus,
        .btn-outline-warning:focus {
            box-shadow: 0 0 0 .2rem rgba(255, 193, 7, .5)
        }

        .btn-outline-warning.disabled,
        .btn-outline-warning:disabled {
            color: #ffc107;
            background-color: transparent
        }

        .btn-outline-warning:not(:disabled):not(.disabled).active,
        .btn-outline-warning:not(:disabled):not(.disabled):active,
        .show>.btn-outline-warning.dropdown-toggle {
            color: #212529;
            background-color: #ffc107;
            border-color: #ffc107
        }

        .btn-outline-warning:not(:disabled):not(.disabled).active:focus,
        .btn-outline-warning:not(:disabled):not(.disabled):active:focus,
        .show>.btn-outline-warning.dropdown-toggle:focus {
            box-shadow: 0 0 0 .2rem rgba(255, 193, 7, .5)
        }

        .btn-outline-danger {
            color: #dc3545;
            border-color: #dc3545
        }

        .btn-outline-danger:hover {
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545
        }

        .btn-outline-danger.focus,
        .btn-outline-danger:focus {
            box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .5)
        }

        .btn-outline-danger.disabled,
        .btn-outline-danger:disabled {
            color: #dc3545;
            background-color: transparent
        }

        .btn-outline-danger:not(:disabled):not(.disabled).active,
        .btn-outline-danger:not(:disabled):not(.disabled):active,
        .show>.btn-outline-danger.dropdown-toggle {
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545
        }

        .btn-outline-danger:not(:disabled):not(.disabled).active:focus,
        .btn-outline-danger:not(:disabled):not(.disabled):active:focus,
        .show>.btn-outline-danger.dropdown-toggle:focus {
            box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .5)
        }

        .btn-outline-light {
            color: #f8f9fa;
            border-color: #f8f9fa
        }

        .btn-outline-light:hover {
            color: #212529;
            background-color: #f8f9fa;
            border-color: #f8f9fa
        }

        .btn-outline-light.focus,
        .btn-outline-light:focus {
            box-shadow: 0 0 0 .2rem rgba(248, 249, 250, .5)
        }

        .btn-outline-light.disabled,
        .btn-outline-light:disabled {
            color: #f8f9fa;
            background-color: transparent
        }

        .btn-outline-light:not(:disabled):not(.disabled).active,
        .btn-outline-light:not(:disabled):not(.disabled):active,
        .show>.btn-outline-light.dropdown-toggle {
            color: #212529;
            background-color: #f8f9fa;
            border-color: #f8f9fa
        }

        .btn-outline-light:not(:disabled):not(.disabled).active:focus,
        .btn-outline-light:not(:disabled):not(.disabled):active:focus,
        .show>.btn-outline-light.dropdown-toggle:focus {
            box-shadow: 0 0 0 .2rem rgba(248, 249, 250, .5)
        }

        .btn-outline-dark {
            color: #343a40;
            border-color: #343a40
        }

        .btn-outline-dark:hover {
            color: #fff;
            background-color: #343a40;
            border-color: #343a40
        }

        .btn-outline-dark.focus,
        .btn-outline-dark:focus {
            box-shadow: 0 0 0 .2rem rgba(52, 58, 64, .5)
        }

        .btn-outline-dark.disabled,
        .btn-outline-dark:disabled {
            color: #343a40;
            background-color: transparent
        }

        .btn-outline-dark:not(:disabled):not(.disabled).active,
        .btn-outline-dark:not(:disabled):not(.disabled):active,
        .show>.btn-outline-dark.dropdown-toggle {
            color: #fff;
            background-color: #343a40;
            border-color: #343a40
        }

        .btn-outline-dark:not(:disabled):not(.disabled).active:focus,
        .btn-outline-dark:not(:disabled):not(.disabled):active:focus,
        .show>.btn-outline-dark.dropdown-toggle:focus {
            box-shadow: 0 0 0 .2rem rgba(52, 58, 64, .5)
        }

        .btn-link {
            font-weight: 400;
            color: #007bff;
            text-decoration: none
        }

        .btn-link:hover {
            color: #0056b3;
            text-decoration: underline
        }

        .btn-link.focus,
        .btn-link:focus {
            text-decoration: underline
        }

        .btn-link.disabled,
        .btn-link:disabled {
            color: #6c757d;
            pointer-events: none
        }

        .btn-group-lg>.btn,
        .btn-lg {
            padding: .5rem 1rem;
            font-size: 1.25rem;
            line-height: 1.5;
            border-radius: .3rem
        }

        .btn-group-sm>.btn,
        .btn-sm {
            padding: .25rem .5rem;
            font-size: .875rem;
            line-height: 1.5;
            border-radius: .2rem
        }

        .btn-block {
            display: block;
            width: 100%
        }

        .btn-block+.btn-block {
            margin-top: .5rem
        }

        input[type=button].btn-block,
        input[type=reset].btn-block,
        input[type=submit].btn-block {
            width: 100%
        }

        .fade {
            transition: opacity .15s linear
        }

        @media (prefers-reduced-motion:reduce) {
            .fade {
                transition: none
            }
        }

        .fade:not(.show) {
            opacity: 0
        }

        .collapse:not(.show) {
            display: none
        }

        .collapsing {
            position: relative;
            height: 0;
            overflow: hidden;
            transition: height .35s ease
        }

        @media (prefers-reduced-motion:reduce) {
            .collapsing {
                transition: none
            }
        }

        .dropdown,
        .dropleft,
        .dropright,
        .dropup {
            position: relative
        }

        .dropdown-toggle {
            white-space: nowrap
        }

        .dropdown-toggle::after {
            display: inline-block;
            margin-left: .255em;
            vertical-align: .255em;
            content: "";
            border-top: .3em solid;
            border-right: .3em solid transparent;
            border-bottom: 0;
            border-left: .3em solid transparent
        }

        .dropdown-toggle:empty::after {
            margin-left: 0
        }

        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 1000;
            display: none;
            float: left;
            min-width: 10rem;
            padding: .5rem 0;
            margin: .125rem 0 0;
            font-size: 1rem;
            color: #212529;
            text-align: left;
            list-style: none;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid rgba(0, 0, 0, .15);
            border-radius: .25rem
        }

        .dropdown-menu-left {
            right: auto;
            left: 0
        }

        .dropdown-menu-right {
            right: 0;
            left: auto
        }

        @media (min-width:576px) {
            .dropdown-menu-sm-left {
                right: auto;
                left: 0
            }

            .dropdown-menu-sm-right {
                right: 0;
                left: auto
            }
        }

        @media (min-width:768px) {
            .dropdown-menu-md-left {
                right: auto;
                left: 0
            }

            .dropdown-menu-md-right {
                right: 0;
                left: auto
            }
        }

        @media (min-width:992px) {
            .dropdown-menu-lg-left {
                right: auto;
                left: 0
            }

            .dropdown-menu-lg-right {
                right: 0;
                left: auto
            }
        }

        @media (min-width:1200px) {
            .dropdown-menu-xl-left {
                right: auto;
                left: 0
            }

            .dropdown-menu-xl-right {
                right: 0;
                left: auto
            }
        }

        .dropup .dropdown-menu {
            top: auto;
            bottom: 100%;
            margin-top: 0;
            margin-bottom: .125rem
        }

        .dropup .dropdown-toggle::after {
            display: inline-block;
            margin-left: .255em;
            vertical-align: .255em;
            content: "";
            border-top: 0;
            border-right: .3em solid transparent;
            border-bottom: .3em solid;
            border-left: .3em solid transparent
        }

        .dropup .dropdown-toggle:empty::after {
            margin-left: 0
        }

        .dropright .dropdown-menu {
            top: 0;
            right: auto;
            left: 100%;
            margin-top: 0;
            margin-left: .125rem
        }

        .dropright .dropdown-toggle::after {
            display: inline-block;
            margin-left: .255em;
            vertical-align: .255em;
            content: "";
            border-top: .3em solid transparent;
            border-right: 0;
            border-bottom: .3em solid transparent;
            border-left: .3em solid
        }

        .dropright .dropdown-toggle:empty::after {
            margin-left: 0
        }

        .dropright .dropdown-toggle::after {
            vertical-align: 0
        }

        .dropleft .dropdown-menu {
            top: 0;
            right: 100%;
            left: auto;
            margin-top: 0;
            margin-right: .125rem
        }

        .dropleft .dropdown-toggle::after {
            display: inline-block;
            margin-left: .255em;
            vertical-align: .255em;
            content: ""
        }

        .dropleft .dropdown-toggle::after {
            display: none
        }

        .dropleft .dropdown-toggle::before {
            display: inline-block;
            margin-right: .255em;
            vertical-align: .255em;
            content: "";
            border-top: .3em solid transparent;
            border-right: .3em solid;
            border-bottom: .3em solid transparent
        }

        .dropleft .dropdown-toggle:empty::after {
            margin-left: 0
        }

        .dropleft .dropdown-toggle::before {
            vertical-align: 0
        }

        .dropdown-menu[x-placement^=bottom],
        .dropdown-menu[x-placement^=left],
        .dropdown-menu[x-placement^=right],
        .dropdown-menu[x-placement^=top] {
            right: auto;
            bottom: auto
        }

        .dropdown-divider {
            height: 0;
            margin: .5rem 0;
            overflow: hidden;
            border-top: 1px solid #e9ecef
        }

        .dropdown-item {
            display: block;
            width: 100%;
            padding: .25rem 1.5rem;
            clear: both;
            font-weight: 400;
            color: #212529;
            text-align: inherit;
            white-space: nowrap;
            background-color: transparent;
            border: 0
        }

        .dropdown-item:focus,
        .dropdown-item:hover {
            color: #16181b;
            text-decoration: none;
            background-color: #e9ecef
        }

        .dropdown-item.active,
        .dropdown-item:active {
            color: #fff;
            text-decoration: none;
            background-color: #007bff
        }

        .dropdown-item.disabled,
        .dropdown-item:disabled {
            color: #adb5bd;
            pointer-events: none;
            background-color: transparent
        }

        .dropdown-menu.show {
            display: block
        }

        .dropdown-header {
            display: block;
            padding: .5rem 1.5rem;
            margin-bottom: 0;
            font-size: .875rem;
            color: #6c757d;
            white-space: nowrap
        }

        .dropdown-item-text {
            display: block;
            padding: .25rem 1.5rem;
            color: #212529
        }

        .btn-group,
        .btn-group-vertical {
            position: relative;
            display: -ms-inline-flexbox;
            display: inline-flex;
            vertical-align: middle
        }

        .btn-group-vertical>.btn,
        .btn-group>.btn {
            position: relative;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto
        }

        .btn-group-vertical>.btn:hover,
        .btn-group>.btn:hover {
            z-index: 1
        }

        .btn-group-vertical>.btn.active,
        .btn-group-vertical>.btn:active,
        .btn-group-vertical>.btn:focus,
        .btn-group>.btn.active,
        .btn-group>.btn:active,
        .btn-group>.btn:focus {
            z-index: 1
        }

        .btn-toolbar {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -ms-flex-pack: start;
            justify-content: flex-start
        }

        .btn-toolbar .input-group {
            width: auto
        }

        .btn-group>.btn-group:not(:first-child),
        .btn-group>.btn:not(:first-child) {
            margin-left: -1px
        }

        .btn-group>.btn-group:not(:last-child)>.btn,
        .btn-group>.btn:not(:last-child):not(.dropdown-toggle) {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0
        }

        .btn-group>.btn-group:not(:first-child)>.btn,
        .btn-group>.btn:not(:first-child) {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0
        }

        .dropdown-toggle-split {
            padding-right: .5625rem;
            padding-left: .5625rem
        }

        .dropdown-toggle-split::after,
        .dropright .dropdown-toggle-split::after,
        .dropup .dropdown-toggle-split::after {
            margin-left: 0
        }

        .dropleft .dropdown-toggle-split::before {
            margin-right: 0
        }

        .btn-group-sm>.btn+.dropdown-toggle-split,
        .btn-sm+.dropdown-toggle-split {
            padding-right: .375rem;
            padding-left: .375rem
        }

        .btn-group-lg>.btn+.dropdown-toggle-split,
        .btn-lg+.dropdown-toggle-split {
            padding-right: .75rem;
            padding-left: .75rem
        }

        .btn-group-vertical {
            -ms-flex-direction: column;
            flex-direction: column;
            -ms-flex-align: start;
            align-items: flex-start;
            -ms-flex-pack: center;
            justify-content: center
        }

        .btn-group-vertical>.btn,
        .btn-group-vertical>.btn-group {
            width: 100%
        }

        .btn-group-vertical>.btn-group:not(:first-child),
        .btn-group-vertical>.btn:not(:first-child) {
            margin-top: -1px
        }

        .btn-group-vertical>.btn-group:not(:last-child)>.btn,
        .btn-group-vertical>.btn:not(:last-child):not(.dropdown-toggle) {
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0
        }

        .btn-group-vertical>.btn-group:not(:first-child)>.btn,
        .btn-group-vertical>.btn:not(:first-child) {
            border-top-left-radius: 0;
            border-top-right-radius: 0
        }

        .btn-group-toggle>.btn,
        .btn-group-toggle>.btn-group>.btn {
            margin-bottom: 0
        }

        .btn-group-toggle>.btn input[type=checkbox],
        .btn-group-toggle>.btn input[type=radio],
        .btn-group-toggle>.btn-group>.btn input[type=checkbox],
        .btn-group-toggle>.btn-group>.btn input[type=radio] {
            position: absolute;
            clip: rect(0, 0, 0, 0);
            pointer-events: none
        }

        .input-group {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -ms-flex-align: stretch;
            align-items: stretch;
            width: 100%
        }

        .input-group>.custom-file,
        .input-group>.custom-select,
        .input-group>.form-control,
        .input-group>.form-control-plaintext {
            position: relative;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            width: 1%;
            min-width: 0;
            margin-bottom: 0
        }

        .input-group>.custom-file+.custom-file,
        .input-group>.custom-file+.custom-select,
        .input-group>.custom-file+.form-control,
        .input-group>.custom-select+.custom-file,
        .input-group>.custom-select+.custom-select,
        .input-group>.custom-select+.form-control,
        .input-group>.form-control+.custom-file,
        .input-group>.form-control+.custom-select,
        .input-group>.form-control+.form-control,
        .input-group>.form-control-plaintext+.custom-file,
        .input-group>.form-control-plaintext+.custom-select,
        .input-group>.form-control-plaintext+.form-control {
            margin-left: -1px
        }

        .input-group>.custom-file .custom-file-input:focus~.custom-file-label,
        .input-group>.custom-select:focus,
        .input-group>.form-control:focus {
            z-index: 3
        }

        .input-group>.custom-file .custom-file-input:focus {
            z-index: 4
        }

        .input-group>.custom-select:not(:first-child),
        .input-group>.form-control:not(:first-child) {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0
        }

        .input-group>.custom-file {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center
        }

        .input-group>.custom-file:not(:first-child) .custom-file-label,
        .input-group>.custom-file:not(:last-child) .custom-file-label {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0
        }

        .input-group:not(.has-validation)>.custom-file:not(:last-child) .custom-file-label::after,
        .input-group:not(.has-validation)>.custom-select:not(:last-child),
        .input-group:not(.has-validation)>.form-control:not(:last-child) {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0
        }

        .input-group.has-validation>.custom-file:nth-last-child(n+3) .custom-file-label::after,
        .input-group.has-validation>.custom-select:nth-last-child(n+3),
        .input-group.has-validation>.form-control:nth-last-child(n+3) {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0
        }

        .input-group-append,
        .input-group-prepend {
            display: -ms-flexbox;
            display: flex
        }

        .input-group-append .btn,
        .input-group-prepend .btn {
            position: relative;
            z-index: 2
        }

        .input-group-append .btn:focus,
        .input-group-prepend .btn:focus {
            z-index: 3
        }

        .input-group-append .btn+.btn,
        .input-group-append .btn+.input-group-text,
        .input-group-append .input-group-text+.btn,
        .input-group-append .input-group-text+.input-group-text,
        .input-group-prepend .btn+.btn,
        .input-group-prepend .btn+.input-group-text,
        .input-group-prepend .input-group-text+.btn,
        .input-group-prepend .input-group-text+.input-group-text {
            margin-left: -1px
        }

        .input-group-prepend {
            margin-right: -1px
        }

        .input-group-append {
            margin-left: -1px
        }

        .input-group-text {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding: .375rem .75rem;
            margin-bottom: 0;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #495057;
            text-align: center;
            white-space: nowrap;
            background-color: #e9ecef;
            border: 1px solid #ced4da;
            border-radius: .25rem
        }

        .input-group-text input[type=checkbox],
        .input-group-text input[type=radio] {
            margin-top: 0
        }

        .input-group-lg>.custom-select,
        .input-group-lg>.form-control:not(textarea) {
            height: calc(1.5em + 1rem + 2px)
        }

        .input-group-lg>.custom-select,
        .input-group-lg>.form-control,
        .input-group-lg>.input-group-append>.btn,
        .input-group-lg>.input-group-append>.input-group-text,
        .input-group-lg>.input-group-prepend>.btn,
        .input-group-lg>.input-group-prepend>.input-group-text {
            padding: .5rem 1rem;
            font-size: 1.25rem;
            line-height: 1.5;
            border-radius: .3rem
        }

        .input-group-sm>.custom-select,
        .input-group-sm>.form-control:not(textarea) {
            height: calc(1.5em + .5rem + 2px)
        }

        .input-group-sm>.custom-select,
        .input-group-sm>.form-control,
        .input-group-sm>.input-group-append>.btn,
        .input-group-sm>.input-group-append>.input-group-text,
        .input-group-sm>.input-group-prepend>.btn,
        .input-group-sm>.input-group-prepend>.input-group-text {
            padding: .25rem .5rem;
            font-size: .875rem;
            line-height: 1.5;
            border-radius: .2rem
        }

        .input-group-lg>.custom-select,
        .input-group-sm>.custom-select {
            padding-right: 1.75rem
        }

        .input-group.has-validation>.input-group-append:nth-last-child(n+3)>.btn,
        .input-group.has-validation>.input-group-append:nth-last-child(n+3)>.input-group-text,
        .input-group:not(.has-validation)>.input-group-append:not(:last-child)>.btn,
        .input-group:not(.has-validation)>.input-group-append:not(:last-child)>.input-group-text,
        .input-group>.input-group-append:last-child>.btn:not(:last-child):not(.dropdown-toggle),
        .input-group>.input-group-append:last-child>.input-group-text:not(:last-child),
        .input-group>.input-group-prepend>.btn,
        .input-group>.input-group-prepend>.input-group-text {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0
        }

        .input-group>.input-group-append>.btn,
        .input-group>.input-group-append>.input-group-text,
        .input-group>.input-group-prepend:first-child>.btn:not(:first-child),
        .input-group>.input-group-prepend:first-child>.input-group-text:not(:first-child),
        .input-group>.input-group-prepend:not(:first-child)>.btn,
        .input-group>.input-group-prepend:not(:first-child)>.input-group-text {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0
        }

        .custom-control {
            position: relative;
            z-index: 1;
            display: block;
            min-height: 1.5rem;
            padding-left: 1.5rem;
            -webkit-print-color-adjust: exact;
            color-adjust: exact
        }

        .custom-control-inline {
            display: -ms-inline-flexbox;
            display: inline-flex;
            margin-right: 1rem
        }

        .custom-control-input {
            position: absolute;
            left: 0;
            z-index: -1;
            width: 1rem;
            height: 1.25rem;
            opacity: 0
        }

        .custom-control-input:checked~.custom-control-label::before {
            color: #fff;
            border-color: #007bff;
            background-color: #007bff
        }

        .custom-control-input:focus~.custom-control-label::before {
            box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .25)
        }

        .custom-control-input:focus:not(:checked)~.custom-control-label::before {
            border-color: #80bdff
        }

        .custom-control-input:not(:disabled):active~.custom-control-label::before {
            color: #fff;
            background-color: #b3d7ff;
            border-color: #b3d7ff
        }

        .custom-control-input:disabled~.custom-control-label,
        .custom-control-input[disabled]~.custom-control-label {
            color: #6c757d
        }

        .custom-control-input:disabled~.custom-control-label::before,
        .custom-control-input[disabled]~.custom-control-label::before {
            background-color: #e9ecef
        }

        .custom-control-label {
            position: relative;
            margin-bottom: 0;
            vertical-align: top
        }

        .custom-control-label::before {
            position: absolute;
            top: .25rem;
            left: -1.5rem;
            display: block;
            width: 1rem;
            height: 1rem;
            pointer-events: none;
            content: "";
            background-color: #fff;
            border: #adb5bd solid 1px
        }

        .custom-control-label::after {
            position: absolute;
            top: .25rem;
            left: -1.5rem;
            display: block;
            width: 1rem;
            height: 1rem;
            content: "";
            background: 50%/50% 50% no-repeat
        }

        .custom-checkbox .custom-control-label::before {
            border-radius: .25rem
        }

        .custom-checkbox .custom-control-input:checked~.custom-control-label::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26l2.974 2.99L8 2.193z'/%3e%3c/svg%3e")
        }

        .custom-checkbox .custom-control-input:indeterminate~.custom-control-label::before {
            border-color: #007bff;
            background-color: #007bff
        }

        .custom-checkbox .custom-control-input:indeterminate~.custom-control-label::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='4' viewBox='0 0 4 4'%3e%3cpath stroke='%23fff' d='M0 2h4'/%3e%3c/svg%3e")
        }

        .custom-checkbox .custom-control-input:disabled:checked~.custom-control-label::before {
            background-color: rgba(0, 123, 255, .5)
        }

        .custom-checkbox .custom-control-input:disabled:indeterminate~.custom-control-label::before {
            background-color: rgba(0, 123, 255, .5)
        }

        .custom-radio .custom-control-label::before {
            border-radius: 50%
        }

        .custom-radio .custom-control-input:checked~.custom-control-label::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e")
        }

        .custom-radio .custom-control-input:disabled:checked~.custom-control-label::before {
            background-color: rgba(0, 123, 255, .5)
        }

        .custom-switch {
            padding-left: 2.25rem
        }

        .custom-switch .custom-control-label::before {
            left: -2.25rem;
            width: 1.75rem;
            pointer-events: all;
            border-radius: .5rem
        }

        .custom-switch .custom-control-label::after {
            top: calc(.25rem + 2px);
            left: calc(-2.25rem + 2px);
            width: calc(1rem - 4px);
            height: calc(1rem - 4px);
            background-color: #adb5bd;
            border-radius: .5rem;
            transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out, -webkit-transform .15s ease-in-out;
            transition: transform .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            transition: transform .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out, -webkit-transform .15s ease-in-out
        }

        @media (prefers-reduced-motion:reduce) {
            .custom-switch .custom-control-label::after {
                transition: none
            }
        }

        .custom-switch .custom-control-input:checked~.custom-control-label::after {
            background-color: #fff;
            -webkit-transform: translateX(.75rem);
            transform: translateX(.75rem)
        }

        .custom-switch .custom-control-input:disabled:checked~.custom-control-label::before {
            background-color: rgba(0, 123, 255, .5)
        }

        .custom-select {
            display: inline-block;
            width: 100%;
            height: calc(1.5em + .75rem + 2px);
            padding: .375rem 1.75rem .375rem .75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #495057;
            vertical-align: middle;
            background: #fff url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") right .75rem center/8px 10px no-repeat;
            border: 1px solid #ced4da;
            border-radius: .25rem;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none
        }

        .custom-select:focus {
            border-color: #80bdff;
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .25)
        }

        .custom-select:focus::-ms-value {
            color: #495057;
            background-color: #fff
        }

        .custom-select[multiple],
        .custom-select[size]:not([size="1"]) {
            height: auto;
            padding-right: .75rem;
            background-image: none
        }

        .custom-select:disabled {
            color: #6c757d;
            background-color: #e9ecef
        }

        .custom-select::-ms-expand {
            display: none
        }

        .custom-select:-moz-focusring {
            color: transparent;
            text-shadow: 0 0 0 #495057
        }

        .custom-select-sm {
            height: calc(1.5em + .5rem + 2px);
            padding-top: .25rem;
            padding-bottom: .25rem;
            padding-left: .5rem;
            font-size: .875rem
        }

        .custom-select-lg {
            height: calc(1.5em + 1rem + 2px);
            padding-top: .5rem;
            padding-bottom: .5rem;
            padding-left: 1rem;
            font-size: 1.25rem
        }

        .custom-file {
            position: relative;
            display: inline-block;
            width: 100%;
            height: calc(1.5em + .75rem + 2px);
            margin-bottom: 0
        }

        .custom-file-input {
            position: relative;
            z-index: 2;
            width: 100%;
            height: calc(1.5em + .75rem + 2px);
            margin: 0;
            overflow: hidden;
            opacity: 0
        }

        .custom-file-input:focus~.custom-file-label {
            border-color: #80bdff;
            box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .25)
        }

        .custom-file-input:disabled~.custom-file-label,
        .custom-file-input[disabled]~.custom-file-label {
            background-color: #e9ecef
        }

        .custom-file-input:lang(en)~.custom-file-label::after {
            content: "Browse"
        }

        .custom-file-input~.custom-file-label[data-browse]::after {
            content: attr(data-browse)
        }

        .custom-file-label {
            position: absolute;
            top: 0;
            right: 0;
            left: 0;
            z-index: 1;
            height: calc(1.5em + .75rem + 2px);
            padding: .375rem .75rem;
            overflow: hidden;
            font-weight: 400;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            border: 1px solid #ced4da;
            border-radius: .25rem
        }

        .custom-file-label::after {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            z-index: 3;
            display: block;
            height: calc(1.5em + .75rem);
            padding: .375rem .75rem;
            line-height: 1.5;
            color: #495057;
            content: "Browse";
            background-color: #e9ecef;
            border-left: inherit;
            border-radius: 0 .25rem .25rem 0
        }

        .custom-range {
            width: 100%;
            height: 1.4rem;
            padding: 0;
            background-color: transparent;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none
        }

        .custom-range:focus {
            outline: 0
        }

        .custom-range:focus::-webkit-slider-thumb {
            box-shadow: 0 0 0 1px #fff, 0 0 0 .2rem rgba(0, 123, 255, .25)
        }

        .custom-range:focus::-moz-range-thumb {
            box-shadow: 0 0 0 1px #fff, 0 0 0 .2rem rgba(0, 123, 255, .25)
        }

        .custom-range:focus::-ms-thumb {
            box-shadow: 0 0 0 1px #fff, 0 0 0 .2rem rgba(0, 123, 255, .25)
        }

        .custom-range::-moz-focus-outer {
            border: 0
        }

        .custom-range::-webkit-slider-thumb {
            width: 1rem;
            height: 1rem;
            margin-top: -.25rem;
            background-color: #007bff;
            border: 0;
            border-radius: 1rem;
            -webkit-transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            -webkit-appearance: none;
            appearance: none
        }

        @media (prefers-reduced-motion:reduce) {
            .custom-range::-webkit-slider-thumb {
                -webkit-transition: none;
                transition: none
            }
        }

        .custom-range::-webkit-slider-thumb:active {
            background-color: #b3d7ff
        }

        .custom-range::-webkit-slider-runnable-track {
            width: 100%;
            height: .5rem;
            color: transparent;
            cursor: pointer;
            background-color: #dee2e6;
            border-color: transparent;
            border-radius: 1rem
        }

        .custom-range::-moz-range-thumb {
            width: 1rem;
            height: 1rem;
            background-color: #007bff;
            border: 0;
            border-radius: 1rem;
            -moz-transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            -moz-appearance: none;
            appearance: none
        }

        @media (prefers-reduced-motion:reduce) {
            .custom-range::-moz-range-thumb {
                -moz-transition: none;
                transition: none
            }
        }

        .custom-range::-moz-range-thumb:active {
            background-color: #b3d7ff
        }

        .custom-range::-moz-range-track {
            width: 100%;
            height: .5rem;
            color: transparent;
            cursor: pointer;
            background-color: #dee2e6;
            border-color: transparent;
            border-radius: 1rem
        }

        .custom-range::-ms-thumb {
            width: 1rem;
            height: 1rem;
            margin-top: 0;
            margin-right: .2rem;
            margin-left: .2rem;
            background-color: #007bff;
            border: 0;
            border-radius: 1rem;
            -ms-transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            appearance: none
        }

        @media (prefers-reduced-motion:reduce) {
            .custom-range::-ms-thumb {
                -ms-transition: none;
                transition: none
            }
        }

        .custom-range::-ms-thumb:active {
            background-color: #b3d7ff
        }

        .custom-range::-ms-track {
            width: 100%;
            height: .5rem;
            color: transparent;
            cursor: pointer;
            background-color: transparent;
            border-color: transparent;
            border-width: .5rem
        }

        .custom-range::-ms-fill-lower {
            background-color: #dee2e6;
            border-radius: 1rem
        }

        .custom-range::-ms-fill-upper {
            margin-right: 15px;
            background-color: #dee2e6;
            border-radius: 1rem
        }

        .custom-range:disabled::-webkit-slider-thumb {
            background-color: #adb5bd
        }

        .custom-range:disabled::-webkit-slider-runnable-track {
            cursor: default
        }

        .custom-range:disabled::-moz-range-thumb {
            background-color: #adb5bd
        }

        .custom-range:disabled::-moz-range-track {
            cursor: default
        }

        .custom-range:disabled::-ms-thumb {
            background-color: #adb5bd
        }

        .custom-control-label::before,
        .custom-file-label,
        .custom-select {
            transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out
        }

        @media (prefers-reduced-motion:reduce) {

            .custom-control-label::before,
            .custom-file-label,
            .custom-select {
                transition: none
            }
        }

        .nav {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            padding-left: 0;
            margin-bottom: 0;
            list-style: none
        }

        .nav-link {
            display: block;
            padding: .5rem 1rem
        }

        .nav-link:focus,
        .nav-link:hover {
            text-decoration: none
        }

        .nav-link.disabled {
            color: #6c757d;
            pointer-events: none;
            cursor: default
        }

        .nav-tabs {
            border-bottom: 1px solid #dee2e6
        }

        .nav-tabs .nav-link {
            margin-bottom: -1px;
            border: 1px solid transparent;
            border-top-left-radius: .25rem;
            border-top-right-radius: .25rem
        }

        .nav-tabs .nav-link:focus,
        .nav-tabs .nav-link:hover {
            border-color: #e9ecef #e9ecef #dee2e6
        }

        .nav-tabs .nav-link.disabled {
            color: #6c757d;
            background-color: transparent;
            border-color: transparent
        }

        .nav-tabs .nav-item.show .nav-link,
        .nav-tabs .nav-link.active {
            color: #495057;
            background-color: #fff;
            border-color: #dee2e6 #dee2e6 #fff
        }

        .nav-tabs .dropdown-menu {
            margin-top: -1px;
            border-top-left-radius: 0;
            border-top-right-radius: 0
        }

        .nav-pills .nav-link {
            border-radius: .25rem
        }

        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            color: #fff;
            background-color: #007bff
        }

        .nav-fill .nav-item,
        .nav-fill>.nav-link {
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            text-align: center
        }

        .nav-justified .nav-item,
        .nav-justified>.nav-link {
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            -ms-flex-positive: 1;
            flex-grow: 1;
            text-align: center
        }

        .tab-content>.tab-pane {
            display: none
        }

        .tab-content>.active {
            display: block
        }

        .navbar {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -ms-flex-align: center;
            align-items: center;
            -ms-flex-pack: justify;
            justify-content: space-between;
            padding: .5rem 1rem
        }

        .navbar .container,
        .navbar .container-fluid,
        .navbar .container-lg,
        .navbar .container-md,
        .navbar .container-sm,
        .navbar .container-xl {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -ms-flex-align: center;
            align-items: center;
            -ms-flex-pack: justify;
            justify-content: space-between
        }

        .navbar-brand {
            display: inline-block;
            padding-top: .3125rem;
            padding-bottom: .3125rem;
            margin-right: 1rem;
            font-size: 1.25rem;
            line-height: inherit;
            white-space: nowrap
        }

        .navbar-brand:focus,
        .navbar-brand:hover {
            text-decoration: none
        }

        .navbar-nav {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            padding-left: 0;
            margin-bottom: 0;
            list-style: none
        }

        .navbar-nav .nav-link {
            padding-right: 0;
            padding-left: 0
        }

        .navbar-nav .dropdown-menu {
            position: static;
            float: none
        }

        .navbar-text {
            display: inline-block;
            padding-top: .5rem;
            padding-bottom: .5rem
        }

        .navbar-collapse {
            -ms-flex-preferred-size: 100%;
            flex-basis: 100%;
            -ms-flex-positive: 1;
            flex-grow: 1;
            -ms-flex-align: center;
            align-items: center
        }

        .navbar-toggler {
            padding: .25rem .75rem;
            font-size: 1.25rem;
            line-height: 1;
            background-color: transparent;
            border: 1px solid transparent;
            border-radius: .25rem
        }

        .navbar-toggler:focus,
        .navbar-toggler:hover {
            text-decoration: none
        }

        .navbar-toggler-icon {
            display: inline-block;
            width: 1.5em;
            height: 1.5em;
            vertical-align: middle;
            content: "";
            background: 50%/100% 100% no-repeat
        }

        .navbar-nav-scroll {
            max-height: 75vh;
            overflow-y: auto
        }

        @media (max-width:575.98px) {

            .navbar-expand-sm>.container,
            .navbar-expand-sm>.container-fluid,
            .navbar-expand-sm>.container-lg,
            .navbar-expand-sm>.container-md,
            .navbar-expand-sm>.container-sm,
            .navbar-expand-sm>.container-xl {
                padding-right: 0;
                padding-left: 0
            }
        }

        @media (min-width:576px) {
            .navbar-expand-sm {
                -ms-flex-flow: row nowrap;
                flex-flow: row nowrap;
                -ms-flex-pack: start;
                justify-content: flex-start
            }

            .navbar-expand-sm .navbar-nav {
                -ms-flex-direction: row;
                flex-direction: row
            }

            .navbar-expand-sm .navbar-nav .dropdown-menu {
                position: absolute
            }

            .navbar-expand-sm .navbar-nav .nav-link {
                padding-right: .5rem;
                padding-left: .5rem
            }

            .navbar-expand-sm>.container,
            .navbar-expand-sm>.container-fluid,
            .navbar-expand-sm>.container-lg,
            .navbar-expand-sm>.container-md,
            .navbar-expand-sm>.container-sm,
            .navbar-expand-sm>.container-xl {
                -ms-flex-wrap: nowrap;
                flex-wrap: nowrap
            }

            .navbar-expand-sm .navbar-nav-scroll {
                overflow: visible
            }

            .navbar-expand-sm .navbar-collapse {
                display: -ms-flexbox !important;
                display: flex !important;
                -ms-flex-preferred-size: auto;
                flex-basis: auto
            }

            .navbar-expand-sm .navbar-toggler {
                display: none
            }
        }

        @media (max-width:767.98px) {

            .navbar-expand-md>.container,
            .navbar-expand-md>.container-fluid,
            .navbar-expand-md>.container-lg,
            .navbar-expand-md>.container-md,
            .navbar-expand-md>.container-sm,
            .navbar-expand-md>.container-xl {
                padding-right: 0;
                padding-left: 0
            }
        }

        @media (min-width:768px) {
            .navbar-expand-md {
                -ms-flex-flow: row nowrap;
                flex-flow: row nowrap;
                -ms-flex-pack: start;
                justify-content: flex-start
            }

            .navbar-expand-md .navbar-nav {
                -ms-flex-direction: row;
                flex-direction: row
            }

            .navbar-expand-md .navbar-nav .dropdown-menu {
                position: absolute
            }

            .navbar-expand-md .navbar-nav .nav-link {
                padding-right: .5rem;
                padding-left: .5rem
            }

            .navbar-expand-md>.container,
            .navbar-expand-md>.container-fluid,
            .navbar-expand-md>.container-lg,
            .navbar-expand-md>.container-md,
            .navbar-expand-md>.container-sm,
            .navbar-expand-md>.container-xl {
                -ms-flex-wrap: nowrap;
                flex-wrap: nowrap
            }

            .navbar-expand-md .navbar-nav-scroll {
                overflow: visible
            }

            .navbar-expand-md .navbar-collapse {
                display: -ms-flexbox !important;
                display: flex !important;
                -ms-flex-preferred-size: auto;
                flex-basis: auto
            }

            .navbar-expand-md .navbar-toggler {
                display: none
            }
        }

        @media (max-width:991.98px) {

            .navbar-expand-lg>.container,
            .navbar-expand-lg>.container-fluid,
            .navbar-expand-lg>.container-lg,
            .navbar-expand-lg>.container-md,
            .navbar-expand-lg>.container-sm,
            .navbar-expand-lg>.container-xl {
                padding-right: 0;
                padding-left: 0
            }
        }

        @media (min-width:992px) {
            .navbar-expand-lg {
                -ms-flex-flow: row nowrap;
                flex-flow: row nowrap;
                -ms-flex-pack: start;
                justify-content: flex-start
            }

            .navbar-expand-lg .navbar-nav {
                -ms-flex-direction: row;
                flex-direction: row
            }

            .navbar-expand-lg .navbar-nav .dropdown-menu {
                position: absolute
            }

            .navbar-expand-lg .navbar-nav .nav-link {
                padding-right: .5rem;
                padding-left: .5rem
            }

            .navbar-expand-lg>.container,
            .navbar-expand-lg>.container-fluid,
            .navbar-expand-lg>.container-lg,
            .navbar-expand-lg>.container-md,
            .navbar-expand-lg>.container-sm,
            .navbar-expand-lg>.container-xl {
                -ms-flex-wrap: nowrap;
                flex-wrap: nowrap
            }

            .navbar-expand-lg .navbar-nav-scroll {
                overflow: visible
            }

            .navbar-expand-lg .navbar-collapse {
                display: -ms-flexbox !important;
                display: flex !important;
                -ms-flex-preferred-size: auto;
                flex-basis: auto
            }

            .navbar-expand-lg .navbar-toggler {
                display: none
            }
        }

        @media (max-width:1199.98px) {

            .navbar-expand-xl>.container,
            .navbar-expand-xl>.container-fluid,
            .navbar-expand-xl>.container-lg,
            .navbar-expand-xl>.container-md,
            .navbar-expand-xl>.container-sm,
            .navbar-expand-xl>.container-xl {
                padding-right: 0;
                padding-left: 0
            }
        }

        @media (min-width:1200px) {
            .navbar-expand-xl {
                -ms-flex-flow: row nowrap;
                flex-flow: row nowrap;
                -ms-flex-pack: start;
                justify-content: flex-start
            }

            .navbar-expand-xl .navbar-nav {
                -ms-flex-direction: row;
                flex-direction: row
            }

            .navbar-expand-xl .navbar-nav .dropdown-menu {
                position: absolute
            }

            .navbar-expand-xl .navbar-nav .nav-link {
                padding-right: .5rem;
                padding-left: .5rem
            }

            .navbar-expand-xl>.container,
            .navbar-expand-xl>.container-fluid,
            .navbar-expand-xl>.container-lg,
            .navbar-expand-xl>.container-md,
            .navbar-expand-xl>.container-sm,
            .navbar-expand-xl>.container-xl {
                -ms-flex-wrap: nowrap;
                flex-wrap: nowrap
            }

            .navbar-expand-xl .navbar-nav-scroll {
                overflow: visible
            }

            .navbar-expand-xl .navbar-collapse {
                display: -ms-flexbox !important;
                display: flex !important;
                -ms-flex-preferred-size: auto;
                flex-basis: auto
            }

            .navbar-expand-xl .navbar-toggler {
                display: none
            }
        }

        .navbar-expand {
            -ms-flex-flow: row nowrap;
            flex-flow: row nowrap;
            -ms-flex-pack: start;
            justify-content: flex-start
        }

        .navbar-expand>.container,
        .navbar-expand>.container-fluid,
        .navbar-expand>.container-lg,
        .navbar-expand>.container-md,
        .navbar-expand>.container-sm,
        .navbar-expand>.container-xl {
            padding-right: 0;
            padding-left: 0
        }

        .navbar-expand .navbar-nav {
            -ms-flex-direction: row;
            flex-direction: row
        }

        .navbar-expand .navbar-nav .dropdown-menu {
            position: absolute
        }

        .navbar-expand .navbar-nav .nav-link {
            padding-right: .5rem;
            padding-left: .5rem
        }

        .navbar-expand>.container,
        .navbar-expand>.container-fluid,
        .navbar-expand>.container-lg,
        .navbar-expand>.container-md,
        .navbar-expand>.container-sm,
        .navbar-expand>.container-xl {
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap
        }

        .navbar-expand .navbar-nav-scroll {
            overflow: visible
        }

        .navbar-expand .navbar-collapse {
            display: -ms-flexbox !important;
            display: flex !important;
            -ms-flex-preferred-size: auto;
            flex-basis: auto
        }

        .navbar-expand .navbar-toggler {
            display: none
        }

        .navbar-light .navbar-brand {
            color: rgba(0, 0, 0, .9)
        }

        .navbar-light .navbar-brand:focus,
        .navbar-light .navbar-brand:hover {
            color: rgba(0, 0, 0, .9)
        }

        .navbar-light .navbar-nav .nav-link {
            color: rgba(0, 0, 0, .5)
        }

        .navbar-light .navbar-nav .nav-link:focus,
        .navbar-light .navbar-nav .nav-link:hover {
            color: rgba(0, 0, 0, .7)
        }

        .navbar-light .navbar-nav .nav-link.disabled {
            color: rgba(0, 0, 0, .3)
        }

        .navbar-light .navbar-nav .active>.nav-link,
        .navbar-light .navbar-nav .nav-link.active,
        .navbar-light .navbar-nav .nav-link.show,
        .navbar-light .navbar-nav .show>.nav-link {
            color: rgba(0, 0, 0, .9)
        }

        .navbar-light .navbar-toggler {
            color: rgba(0, 0, 0, .5);
            border-color: rgba(0, 0, 0, .1)
        }

        .navbar-light .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%280, 0, 0, 0.5%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e")
        }

        .navbar-light .navbar-text {
            color: rgba(0, 0, 0, .5)
        }

        .navbar-light .navbar-text a {
            color: rgba(0, 0, 0, .9)
        }

        .navbar-light .navbar-text a:focus,
        .navbar-light .navbar-text a:hover {
            color: rgba(0, 0, 0, .9)
        }

        .navbar-dark .navbar-brand {
            color: #fff
        }

        .navbar-dark .navbar-brand:focus,
        .navbar-dark .navbar-brand:hover {
            color: #fff
        }

        .navbar-dark .navbar-nav .nav-link {
            color: rgba(255, 255, 255, .5)
        }

        .navbar-dark .navbar-nav .nav-link:focus,
        .navbar-dark .navbar-nav .nav-link:hover {
            color: rgba(255, 255, 255, .75)
        }

        .navbar-dark .navbar-nav .nav-link.disabled {
            color: rgba(255, 255, 255, .25)
        }

        .navbar-dark .navbar-nav .active>.nav-link,
        .navbar-dark .navbar-nav .nav-link.active,
        .navbar-dark .navbar-nav .nav-link.show,
        .navbar-dark .navbar-nav .show>.nav-link {
            color: #fff
        }

        .navbar-dark .navbar-toggler {
            color: rgba(255, 255, 255, .5);
            border-color: rgba(255, 255, 255, .1)
        }

        .navbar-dark .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.5%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e")
        }

        .navbar-dark .navbar-text {
            color: rgba(255, 255, 255, .5)
        }

        .navbar-dark .navbar-text a {
            color: #fff
        }

        .navbar-dark .navbar-text a:focus,
        .navbar-dark .navbar-text a:hover {
            color: #fff
        }

        .card {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, .125);
            border-radius: .25rem
        }

        .card>hr {
            margin-right: 0;
            margin-left: 0
        }

        .card>.list-group {
            border-top: inherit;
            border-bottom: inherit
        }

        .card>.list-group:first-child {
            border-top-width: 0;
            border-top-left-radius: calc(.25rem - 1px);
            border-top-right-radius: calc(.25rem - 1px)
        }

        .card>.list-group:last-child {
            border-bottom-width: 0;
            border-bottom-right-radius: calc(.25rem - 1px);
            border-bottom-left-radius: calc(.25rem - 1px)
        }

        .card>.card-header+.list-group,
        .card>.list-group+.card-footer {
            border-top: 0
        }

        .card-body {
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            min-height: 1px;
            padding: 1.25rem
        }

        .card-title {
            margin-bottom: .75rem
        }

        .card-subtitle {
            margin-top: -.375rem;
            margin-bottom: 0
        }

        .card-text:last-child {
            margin-bottom: 0
        }

        .card-link:hover {
            text-decoration: none
        }

        .card-link+.card-link {
            margin-left: 1.25rem
        }

        .card-header {
            padding: .75rem 1.25rem;
            margin-bottom: 0;
            background-color: rgba(0, 0, 0, .03);
            border-bottom: 1px solid rgba(0, 0, 0, .125)
        }

        .card-header:first-child {
            border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0
        }

        .card-footer {
            padding: .75rem 1.25rem;
            background-color: rgba(0, 0, 0, .03);
            border-top: 1px solid rgba(0, 0, 0, .125)
        }

        .card-footer:last-child {
            border-radius: 0 0 calc(.25rem - 1px) calc(.25rem - 1px)
        }

        .card-header-tabs {
            margin-right: -.625rem;
            margin-bottom: -.75rem;
            margin-left: -.625rem;
            border-bottom: 0
        }

        .card-header-pills {
            margin-right: -.625rem;
            margin-left: -.625rem
        }

        .card-img-overlay {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            padding: 1.25rem;
            border-radius: calc(.25rem - 1px)
        }

        .card-img,
        .card-img-bottom,
        .card-img-top {
            -ms-flex-negative: 0;
            flex-shrink: 0;
            width: 100%
        }

        .card-img,
        .card-img-top {
            border-top-left-radius: calc(.25rem - 1px);
            border-top-right-radius: calc(.25rem - 1px)
        }

        .card-img,
        .card-img-bottom {
            border-bottom-right-radius: calc(.25rem - 1px);
            border-bottom-left-radius: calc(.25rem - 1px)
        }

        .card-deck .card {
            margin-bottom: 15px
        }

        @media (min-width:576px) {
            .card-deck {
                display: -ms-flexbox;
                display: flex;
                -ms-flex-flow: row wrap;
                flex-flow: row wrap;
                margin-right: -15px;
                margin-left: -15px
            }

            .card-deck .card {
                -ms-flex: 1 0 0%;
                flex: 1 0 0%;
                margin-right: 15px;
                margin-bottom: 0;
                margin-left: 15px
            }
        }

        .card-group>.card {
            margin-bottom: 15px
        }

        @media (min-width:576px) {
            .card-group {
                display: -ms-flexbox;
                display: flex;
                -ms-flex-flow: row wrap;
                flex-flow: row wrap
            }

            .card-group>.card {
                -ms-flex: 1 0 0%;
                flex: 1 0 0%;
                margin-bottom: 0
            }

            .card-group>.card+.card {
                margin-left: 0;
                border-left: 0
            }

            .card-group>.card:not(:last-child) {
                border-top-right-radius: 0;
                border-bottom-right-radius: 0
            }

            .card-group>.card:not(:last-child) .card-header,
            .card-group>.card:not(:last-child) .card-img-top {
                border-top-right-radius: 0
            }

            .card-group>.card:not(:last-child) .card-footer,
            .card-group>.card:not(:last-child) .card-img-bottom {
                border-bottom-right-radius: 0
            }

            .card-group>.card:not(:first-child) {
                border-top-left-radius: 0;
                border-bottom-left-radius: 0
            }

            .card-group>.card:not(:first-child) .card-header,
            .card-group>.card:not(:first-child) .card-img-top {
                border-top-left-radius: 0
            }

            .card-group>.card:not(:first-child) .card-footer,
            .card-group>.card:not(:first-child) .card-img-bottom {
                border-bottom-left-radius: 0
            }
        }

        .card-columns .card {
            margin-bottom: .75rem
        }

        @media (min-width:576px) {
            .card-columns {
                -webkit-column-count: 3;
                -moz-column-count: 3;
                column-count: 3;
                -webkit-column-gap: 1.25rem;
                -moz-column-gap: 1.25rem;
                column-gap: 1.25rem;
                orphans: 1;
                widows: 1
            }

            .card-columns .card {
                display: inline-block;
                width: 100%
            }
        }

        .accordion {
            overflow-anchor: none
        }

        .accordion>.card {
            overflow: hidden
        }

        .accordion>.card:not(:last-of-type) {
            border-bottom: 0;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0
        }

        .accordion>.card:not(:first-of-type) {
            border-top-left-radius: 0;
            border-top-right-radius: 0
        }

        .accordion>.card>.card-header {
            border-radius: 0;
            margin-bottom: -1px
        }

        .breadcrumb {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            padding: .75rem 1rem;
            margin-bottom: 1rem;
            list-style: none;
            background-color: #e9ecef;
            border-radius: .25rem
        }

        .breadcrumb-item+.breadcrumb-item {
            padding-left: .5rem
        }

        .breadcrumb-item+.breadcrumb-item::before {
            float: left;
            padding-right: .5rem;
            color: #6c757d;
            content: "/"
        }

        .breadcrumb-item+.breadcrumb-item:hover::before {
            text-decoration: underline
        }

        .breadcrumb-item+.breadcrumb-item:hover::before {
            text-decoration: none
        }

        .breadcrumb-item.active {
            color: #6c757d
        }

        .pagination {
            display: -ms-flexbox;
            display: flex;
            padding-left: 0;
            list-style: none;
            border-radius: .25rem
        }

        .page-link {
            position: relative;
            display: block;
            padding: .5rem .75rem;
            margin-left: -1px;
            line-height: 1.25;
            color: #007bff;
            background-color: #fff;
            border: 1px solid #dee2e6
        }

        .page-link:hover {
            z-index: 2;
            color: #0056b3;
            text-decoration: none;
            background-color: #e9ecef;
            border-color: #dee2e6
        }

        .page-link:focus {
            z-index: 3;
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .25)
        }

        .page-item:first-child .page-link {
            margin-left: 0;
            border-top-left-radius: .25rem;
            border-bottom-left-radius: .25rem
        }

        .page-item:last-child .page-link {
            border-top-right-radius: .25rem;
            border-bottom-right-radius: .25rem
        }

        .page-item.active .page-link {
            z-index: 3;
            color: #fff;
            background-color: #007bff;
            border-color: #007bff
        }

        .page-item.disabled .page-link {
            color: #6c757d;
            pointer-events: none;
            cursor: auto;
            background-color: #fff;
            border-color: #dee2e6
        }

        .pagination-lg .page-link {
            padding: .75rem 1.5rem;
            font-size: 1.25rem;
            line-height: 1.5
        }

        .pagination-lg .page-item:first-child .page-link {
            border-top-left-radius: .3rem;
            border-bottom-left-radius: .3rem
        }

        .pagination-lg .page-item:last-child .page-link {
            border-top-right-radius: .3rem;
            border-bottom-right-radius: .3rem
        }

        .pagination-sm .page-link {
            padding: .25rem .5rem;
            font-size: .875rem;
            line-height: 1.5
        }

        .pagination-sm .page-item:first-child .page-link {
            border-top-left-radius: .2rem;
            border-bottom-left-radius: .2rem
        }

        .pagination-sm .page-item:last-child .page-link {
            border-top-right-radius: .2rem;
            border-bottom-right-radius: .2rem
        }

        .badge {
            display: inline-block;
            padding: .25em .4em;
            font-size: 75%;
            font-weight: 700;
            line-height: 1;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: .25rem;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out
        }

        @media (prefers-reduced-motion:reduce) {
            .badge {
                transition: none
            }
        }

        a.badge:focus,
        a.badge:hover {
            text-decoration: none
        }

        .badge:empty {
            display: none
        }

        .btn .badge {
            position: relative;
            top: -1px
        }

        .badge-pill {
            padding-right: .6em;
            padding-left: .6em;
            border-radius: 10rem
        }

        .badge-primary {
            color: #fff;
            background-color: #007bff
        }

        a.badge-primary:focus,
        a.badge-primary:hover {
            color: #fff;
            background-color: #0062cc
        }

        a.badge-primary.focus,
        a.badge-primary:focus {
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .5)
        }

        .badge-secondary {
            color: #fff;
            background-color: #6c757d
        }

        a.badge-secondary:focus,
        a.badge-secondary:hover {
            color: #fff;
            background-color: #545b62
        }

        a.badge-secondary.focus,
        a.badge-secondary:focus {
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(108, 117, 125, .5)
        }

        .badge-success {
            color: #fff;
            background-color: #28a745
        }

        a.badge-success:focus,
        a.badge-success:hover {
            color: #fff;
            background-color: #1e7e34
        }

        a.badge-success.focus,
        a.badge-success:focus {
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .5)
        }

        .badge-info {
            color: #fff;
            background-color: #17a2b8
        }

        a.badge-info:focus,
        a.badge-info:hover {
            color: #fff;
            background-color: #117a8b
        }

        a.badge-info.focus,
        a.badge-info:focus {
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(23, 162, 184, .5)
        }

        .badge-warning {
            color: #212529;
            background-color: #ffc107
        }

        a.badge-warning:focus,
        a.badge-warning:hover {
            color: #212529;
            background-color: #d39e00
        }

        a.badge-warning.focus,
        a.badge-warning:focus {
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(255, 193, 7, .5)
        }

        .badge-danger {
            color: #fff;
            background-color: #dc3545
        }

        a.badge-danger:focus,
        a.badge-danger:hover {
            color: #fff;
            background-color: #bd2130
        }

        a.badge-danger.focus,
        a.badge-danger:focus {
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .5)
        }

        .badge-light {
            color: #212529;
            background-color: #f8f9fa
        }

        a.badge-light:focus,
        a.badge-light:hover {
            color: #212529;
            background-color: #dae0e5
        }

        a.badge-light.focus,
        a.badge-light:focus {
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(248, 249, 250, .5)
        }

        .badge-dark {
            color: #fff;
            background-color: #343a40
        }

        a.badge-dark:focus,
        a.badge-dark:hover {
            color: #fff;
            background-color: #1d2124
        }

        a.badge-dark.focus,
        a.badge-dark:focus {
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(52, 58, 64, .5)
        }

        .jumbotron {
            padding: 2rem 1rem;
            margin-bottom: 2rem;
            background-color: #e9ecef;
            border-radius: .3rem
        }

        @media (min-width:576px) {
            .jumbotron {
                padding: 4rem 2rem
            }
        }

        .jumbotron-fluid {
            padding-right: 0;
            padding-left: 0;
            border-radius: 0
        }

        .alert {
            position: relative;
            padding: .75rem 1.25rem;
            margin-bottom: 1rem;
            border: 1px solid transparent;
            border-radius: .25rem
        }

        .alert-heading {
            color: inherit
        }

        .alert-link {
            font-weight: 700
        }

        .alert-dismissible {
            padding-right: 4rem
        }

        .alert-dismissible .close {
            position: absolute;
            top: 0;
            right: 0;
            z-index: 2;
            padding: .75rem 1.25rem;
            color: inherit
        }

        .alert-primary {
            color: #004085;
            background-color: #cce5ff;
            border-color: #b8daff
        }

        .alert-primary hr {
            border-top-color: #9fcdff
        }

        .alert-primary .alert-link {
            color: #002752
        }

        .alert-secondary {
            color: #383d41;
            background-color: #e2e3e5;
            border-color: #d6d8db
        }

        .alert-secondary hr {
            border-top-color: #c8cbcf
        }

        .alert-secondary .alert-link {
            color: #202326
        }

        .alert-success {
            color: #155724;
            background-color: #d4edda;
            border-color: #c3e6cb
        }

        .alert-success hr {
            border-top-color: #b1dfbb
        }

        .alert-success .alert-link {
            color: #0b2e13
        }

        .alert-info {
            color: #0c5460;
            background-color: #d1ecf1;
            border-color: #bee5eb
        }

        .alert-info hr {
            border-top-color: #abdde5
        }

        .alert-info .alert-link {
            color: #062c33
        }

        .alert-warning {
            color: #856404;
            background-color: #fff3cd;
            border-color: #ffeeba
        }

        .alert-warning hr {
            border-top-color: #ffe8a1
        }

        .alert-warning .alert-link {
            color: #533f03
        }

        .alert-danger {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb
        }

        .alert-danger hr {
            border-top-color: #f1b0b7
        }

        .alert-danger .alert-link {
            color: #491217
        }

        .alert-light {
            color: #818182;
            background-color: #fefefe;
            border-color: #fdfdfe
        }

        .alert-light hr {
            border-top-color: #ececf6
        }

        .alert-light .alert-link {
            color: #686868
        }

        .alert-dark {
            color: #1b1e21;
            background-color: #d6d8d9;
            border-color: #c6c8ca
        }

        .alert-dark hr {
            border-top-color: #b9bbbe
        }

        .alert-dark .alert-link {
            color: #040505
        }

        @-webkit-keyframes progress-bar-stripes {
            from {
                background-position: 1rem 0
            }

            to {
                background-position: 0 0
            }
        }

        @keyframes progress-bar-stripes {
            from {
                background-position: 1rem 0
            }

            to {
                background-position: 0 0
            }
        }

        .progress {
            display: -ms-flexbox;
            display: flex;
            height: 1rem;
            overflow: hidden;
            line-height: 0;
            font-size: .75rem;
            background-color: #e9ecef;
            border-radius: .25rem
        }

        .progress-bar {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            -ms-flex-pack: center;
            justify-content: center;
            overflow: hidden;
            color: #fff;
            text-align: center;
            white-space: nowrap;
            background-color: #007bff;
            transition: width .6s ease
        }

        @media (prefers-reduced-motion:reduce) {
            .progress-bar {
                transition: none
            }
        }

        .progress-bar-striped {
            background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
            background-size: 1rem 1rem
        }

        .progress-bar-animated {
            -webkit-animation: 1s linear infinite progress-bar-stripes;
            animation: 1s linear infinite progress-bar-stripes
        }

        @media (prefers-reduced-motion:reduce) {
            .progress-bar-animated {
                -webkit-animation: none;
                animation: none
            }
        }

        .media {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: start;
            align-items: flex-start
        }

        .media-body {
            -ms-flex: 1;
            flex: 1
        }

        .list-group {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            padding-left: 0;
            margin-bottom: 0;
            border-radius: .25rem
        }

        .list-group-item-action {
            width: 100%;
            color: #495057;
            text-align: inherit
        }

        .list-group-item-action:focus,
        .list-group-item-action:hover {
            z-index: 1;
            color: #495057;
            text-decoration: none;
            background-color: #f8f9fa
        }

        .list-group-item-action:active {
            color: #212529;
            background-color: #e9ecef
        }

        .list-group-item {
            position: relative;
            display: block;
            padding: .75rem 1.25rem;
            background-color: #fff;
            border: 1px solid rgba(0, 0, 0, .125)
        }

        .list-group-item:first-child {
            border-top-left-radius: inherit;
            border-top-right-radius: inherit
        }

        .list-group-item:last-child {
            border-bottom-right-radius: inherit;
            border-bottom-left-radius: inherit
        }

        .list-group-item.disabled,
        .list-group-item:disabled {
            color: #6c757d;
            pointer-events: none;
            background-color: #fff
        }

        .list-group-item.active {
            z-index: 2;
            color: #fff;
            background-color: #007bff;
            border-color: #007bff
        }

        .list-group-item+.list-group-item {
            border-top-width: 0
        }

        .list-group-item+.list-group-item.active {
            margin-top: -1px;
            border-top-width: 1px
        }

        .list-group-horizontal {
            -ms-flex-direction: row;
            flex-direction: row
        }

        .list-group-horizontal>.list-group-item:first-child {
            border-bottom-left-radius: .25rem;
            border-top-right-radius: 0
        }

        .list-group-horizontal>.list-group-item:last-child {
            border-top-right-radius: .25rem;
            border-bottom-left-radius: 0
        }

        .list-group-horizontal>.list-group-item.active {
            margin-top: 0
        }

        .list-group-horizontal>.list-group-item+.list-group-item {
            border-top-width: 1px;
            border-left-width: 0
        }

        .list-group-horizontal>.list-group-item+.list-group-item.active {
            margin-left: -1px;
            border-left-width: 1px
        }

        @media (min-width:576px) {
            .list-group-horizontal-sm {
                -ms-flex-direction: row;
                flex-direction: row
            }

            .list-group-horizontal-sm>.list-group-item:first-child {
                border-bottom-left-radius: .25rem;
                border-top-right-radius: 0
            }

            .list-group-horizontal-sm>.list-group-item:last-child {
                border-top-right-radius: .25rem;
                border-bottom-left-radius: 0
            }

            .list-group-horizontal-sm>.list-group-item.active {
                margin-top: 0
            }

            .list-group-horizontal-sm>.list-group-item+.list-group-item {
                border-top-width: 1px;
                border-left-width: 0
            }

            .list-group-horizontal-sm>.list-group-item+.list-group-item.active {
                margin-left: -1px;
                border-left-width: 1px
            }
        }

        @media (min-width:768px) {
            .list-group-horizontal-md {
                -ms-flex-direction: row;
                flex-direction: row
            }

            .list-group-horizontal-md>.list-group-item:first-child {
                border-bottom-left-radius: .25rem;
                border-top-right-radius: 0
            }

            .list-group-horizontal-md>.list-group-item:last-child {
                border-top-right-radius: .25rem;
                border-bottom-left-radius: 0
            }

            .list-group-horizontal-md>.list-group-item.active {
                margin-top: 0
            }

            .list-group-horizontal-md>.list-group-item+.list-group-item {
                border-top-width: 1px;
                border-left-width: 0
            }

            .list-group-horizontal-md>.list-group-item+.list-group-item.active {
                margin-left: -1px;
                border-left-width: 1px
            }
        }

        @media (min-width:992px) {
            .list-group-horizontal-lg {
                -ms-flex-direction: row;
                flex-direction: row
            }

            .list-group-horizontal-lg>.list-group-item:first-child {
                border-bottom-left-radius: .25rem;
                border-top-right-radius: 0
            }

            .list-group-horizontal-lg>.list-group-item:last-child {
                border-top-right-radius: .25rem;
                border-bottom-left-radius: 0
            }

            .list-group-horizontal-lg>.list-group-item.active {
                margin-top: 0
            }

            .list-group-horizontal-lg>.list-group-item+.list-group-item {
                border-top-width: 1px;
                border-left-width: 0
            }

            .list-group-horizontal-lg>.list-group-item+.list-group-item.active {
                margin-left: -1px;
                border-left-width: 1px
            }
        }

        @media (min-width:1200px) {
            .list-group-horizontal-xl {
                -ms-flex-direction: row;
                flex-direction: row
            }

            .list-group-horizontal-xl>.list-group-item:first-child {
                border-bottom-left-radius: .25rem;
                border-top-right-radius: 0
            }

            .list-group-horizontal-xl>.list-group-item:last-child {
                border-top-right-radius: .25rem;
                border-bottom-left-radius: 0
            }

            .list-group-horizontal-xl>.list-group-item.active {
                margin-top: 0
            }

            .list-group-horizontal-xl>.list-group-item+.list-group-item {
                border-top-width: 1px;
                border-left-width: 0
            }

            .list-group-horizontal-xl>.list-group-item+.list-group-item.active {
                margin-left: -1px;
                border-left-width: 1px
            }
        }

        .list-group-flush {
            border-radius: 0
        }

        .list-group-flush>.list-group-item {
            border-width: 0 0 1px
        }

        .list-group-flush>.list-group-item:last-child {
            border-bottom-width: 0
        }

        .list-group-item-primary {
            color: #004085;
            background-color: #b8daff
        }

        .list-group-item-primary.list-group-item-action:focus,
        .list-group-item-primary.list-group-item-action:hover {
            color: #004085;
            background-color: #9fcdff
        }

        .list-group-item-primary.list-group-item-action.active {
            color: #fff;
            background-color: #004085;
            border-color: #004085
        }

        .list-group-item-secondary {
            color: #383d41;
            background-color: #d6d8db
        }

        .list-group-item-secondary.list-group-item-action:focus,
        .list-group-item-secondary.list-group-item-action:hover {
            color: #383d41;
            background-color: #c8cbcf
        }

        .list-group-item-secondary.list-group-item-action.active {
            color: #fff;
            background-color: #383d41;
            border-color: #383d41
        }

        .list-group-item-success {
            color: #155724;
            background-color: #c3e6cb
        }

        .list-group-item-success.list-group-item-action:focus,
        .list-group-item-success.list-group-item-action:hover {
            color: #155724;
            background-color: #b1dfbb
        }

        .list-group-item-success.list-group-item-action.active {
            color: #fff;
            background-color: #155724;
            border-color: #155724
        }

        .list-group-item-info {
            color: #0c5460;
            background-color: #bee5eb
        }

        .list-group-item-info.list-group-item-action:focus,
        .list-group-item-info.list-group-item-action:hover {
            color: #0c5460;
            background-color: #abdde5
        }

        .list-group-item-info.list-group-item-action.active {
            color: #fff;
            background-color: #0c5460;
            border-color: #0c5460
        }

        .list-group-item-warning {
            color: #856404;
            background-color: #ffeeba
        }

        .list-group-item-warning.list-group-item-action:focus,
        .list-group-item-warning.list-group-item-action:hover {
            color: #856404;
            background-color: #ffe8a1
        }

        .list-group-item-warning.list-group-item-action.active {
            color: #fff;
            background-color: #856404;
            border-color: #856404
        }

        .list-group-item-danger {
            color: #721c24;
            background-color: #f5c6cb
        }

        .list-group-item-danger.list-group-item-action:focus,
        .list-group-item-danger.list-group-item-action:hover {
            color: #721c24;
            background-color: #f1b0b7
        }

        .list-group-item-danger.list-group-item-action.active {
            color: #fff;
            background-color: #721c24;
            border-color: #721c24
        }

        .list-group-item-light {
            color: #818182;
            background-color: #fdfdfe
        }

        .list-group-item-light.list-group-item-action:focus,
        .list-group-item-light.list-group-item-action:hover {
            color: #818182;
            background-color: #ececf6
        }

        .list-group-item-light.list-group-item-action.active {
            color: #fff;
            background-color: #818182;
            border-color: #818182
        }

        .list-group-item-dark {
            color: #1b1e21;
            background-color: #c6c8ca
        }

        .list-group-item-dark.list-group-item-action:focus,
        .list-group-item-dark.list-group-item-action:hover {
            color: #1b1e21;
            background-color: #b9bbbe
        }

        .list-group-item-dark.list-group-item-action.active {
            color: #fff;
            background-color: #1b1e21;
            border-color: #1b1e21
        }

        .close {
            float: right;
            font-size: 1.5rem;
            font-weight: 700;
            line-height: 1;
            color: #000;
            text-shadow: 0 1px 0 #fff;
            opacity: .5
        }

        .close:hover {
            color: #000;
            text-decoration: none
        }

        .close:not(:disabled):not(.disabled):focus,
        .close:not(:disabled):not(.disabled):hover {
            opacity: .75
        }

        button.close {
            padding: 0;
            background-color: transparent;
            border: 0
        }

        a.close.disabled {
            pointer-events: none
        }

        .toast {
            -ms-flex-preferred-size: 350px;
            flex-basis: 350px;
            max-width: 350px;
            font-size: .875rem;
            background-color: rgba(255, 255, 255, .85);
            background-clip: padding-box;
            border: 1px solid rgba(0, 0, 0, .1);
            box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .1);
            opacity: 0;
            border-radius: .25rem
        }

        .toast:not(:last-child) {
            margin-bottom: .75rem
        }

        .toast.showing {
            opacity: 1
        }

        .toast.show {
            display: block;
            opacity: 1
        }

        .toast.hide {
            display: none
        }

        .toast-header {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding: .25rem .75rem;
            color: #6c757d;
            background-color: rgba(255, 255, 255, .85);
            background-clip: padding-box;
            border-bottom: 1px solid rgba(0, 0, 0, .05);
            border-top-left-radius: calc(.25rem - 1px);
            border-top-right-radius: calc(.25rem - 1px)
        }

        .toast-body {
            padding: .75rem
        }

        .modal-open {
            overflow: hidden
        }

        .modal-open .modal {
            overflow-x: hidden;
            overflow-y: auto
        }

        .modal {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1050;
            display: none;
            width: 100%;
            height: 100%;
            overflow: hidden;
            outline: 0
        }

        .modal-dialog {
            position: relative;
            width: auto;
            margin: .5rem;
            pointer-events: none
        }

        .modal.fade .modal-dialog {
            transition: -webkit-transform .3s ease-out;
            transition: transform .3s ease-out;
            transition: transform .3s ease-out, -webkit-transform .3s ease-out;
            -webkit-transform: translate(0, -50px);
            transform: translate(0, -50px)
        }

        @media (prefers-reduced-motion:reduce) {
            .modal.fade .modal-dialog {
                transition: none
            }
        }

        .modal.show .modal-dialog {
            -webkit-transform: none;
            transform: none
        }

        .modal.modal-static .modal-dialog {
            -webkit-transform: scale(1.02);
            transform: scale(1.02)
        }

        .modal-dialog-scrollable {
            display: -ms-flexbox;
            display: flex;
            max-height: calc(100% - 1rem)
        }

        .modal-dialog-scrollable .modal-content {
            max-height: calc(100vh - 1rem);
            overflow: hidden
        }

        .modal-dialog-scrollable .modal-footer,
        .modal-dialog-scrollable .modal-header {
            -ms-flex-negative: 0;
            flex-shrink: 0
        }

        .modal-dialog-scrollable .modal-body {
            overflow-y: auto
        }

        .modal-dialog-centered {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            min-height: calc(100% - 1rem)
        }

        .modal-dialog-centered::before {
            display: block;
            height: calc(100vh - 1rem);
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
            content: ""
        }

        .modal-dialog-centered.modal-dialog-scrollable {
            -ms-flex-direction: column;
            flex-direction: column;
            -ms-flex-pack: center;
            justify-content: center;
            height: 100%
        }

        .modal-dialog-centered.modal-dialog-scrollable .modal-content {
            max-height: none
        }

        .modal-dialog-centered.modal-dialog-scrollable::before {
            content: none
        }

        .modal-content {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            width: 100%;
            pointer-events: auto;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid rgba(0, 0, 0, .2);
            border-radius: .3rem;
            outline: 0
        }

        .modal-backdrop {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1040;
            width: 100vw;
            height: 100vh;
            background-color: #000
        }

        .modal-backdrop.fade {
            opacity: 0
        }

        .modal-backdrop.show {
            opacity: .5
        }

        .modal-header {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: start;
            align-items: flex-start;
            -ms-flex-pack: justify;
            justify-content: space-between;
            padding: 1rem 1rem;
            border-bottom: 1px solid #dee2e6;
            border-top-left-radius: calc(.3rem - 1px);
            border-top-right-radius: calc(.3rem - 1px)
        }

        .modal-header .close {
            padding: 1rem 1rem;
            margin: -1rem -1rem -1rem auto
        }

        .modal-title {
            margin-bottom: 0;
            line-height: 1.5
        }

        .modal-body {
            position: relative;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: 1rem
        }

        .modal-footer {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -ms-flex-align: center;
            align-items: center;
            -ms-flex-pack: end;
            justify-content: flex-end;
            padding: .75rem;
            border-top: 1px solid #dee2e6;
            border-bottom-right-radius: calc(.3rem - 1px);
            border-bottom-left-radius: calc(.3rem - 1px)
        }

        .modal-footer>* {
            margin: .25rem
        }

        .modal-scrollbar-measure {
            position: absolute;
            top: -9999px;
            width: 50px;
            height: 50px;
            overflow: scroll
        }

        @media (min-width:576px) {
            .modal-dialog {
                max-width: 500px;
                margin: 1.75rem auto
            }

            .modal-dialog-scrollable {
                max-height: calc(100% - 3.5rem)
            }

            .modal-dialog-scrollable .modal-content {
                max-height: calc(100vh - 3.5rem)
            }

            .modal-dialog-centered {
                min-height: calc(100% - 3.5rem)
            }

            .modal-dialog-centered::before {
                height: calc(100vh - 3.5rem);
                height: -webkit-min-content;
                height: -moz-min-content;
                height: min-content
            }

            .modal-sm {
                max-width: 300px
            }
        }

        @media (min-width:992px) {

            .modal-lg,
            .modal-xl {
                max-width: 800px
            }
        }

        @media (min-width:1200px) {
            .modal-xl {
                max-width: 1140px
            }
        }

        .tooltip {
            position: absolute;
            z-index: 1070;
            display: block;
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-style: normal;
            font-weight: 400;
            line-height: 1.5;
            text-align: left;
            text-align: start;
            text-decoration: none;
            text-shadow: none;
            text-transform: none;
            letter-spacing: normal;
            word-break: normal;
            word-spacing: normal;
            white-space: normal;
            line-break: auto;
            font-size: .875rem;
            word-wrap: break-word;
            opacity: 0
        }

        .tooltip.show {
            opacity: .9
        }

        .tooltip .arrow {
            position: absolute;
            display: block;
            width: .8rem;
            height: .4rem
        }

        .tooltip .arrow::before {
            position: absolute;
            content: "";
            border-color: transparent;
            border-style: solid
        }

        .bs-tooltip-auto[x-placement^=top],
        .bs-tooltip-top {
            padding: .4rem 0
        }

        .bs-tooltip-auto[x-placement^=top] .arrow,
        .bs-tooltip-top .arrow {
            bottom: 0
        }

        .bs-tooltip-auto[x-placement^=top] .arrow::before,
        .bs-tooltip-top .arrow::before {
            top: 0;
            border-width: .4rem .4rem 0;
            border-top-color: #000
        }

        .bs-tooltip-auto[x-placement^=right],
        .bs-tooltip-right {
            padding: 0 .4rem
        }

        .bs-tooltip-auto[x-placement^=right] .arrow,
        .bs-tooltip-right .arrow {
            left: 0;
            width: .4rem;
            height: .8rem
        }

        .bs-tooltip-auto[x-placement^=right] .arrow::before,
        .bs-tooltip-right .arrow::before {
            right: 0;
            border-width: .4rem .4rem .4rem 0;
            border-right-color: #000
        }

        .bs-tooltip-auto[x-placement^=bottom],
        .bs-tooltip-bottom {
            padding: .4rem 0
        }

        .bs-tooltip-auto[x-placement^=bottom] .arrow,
        .bs-tooltip-bottom .arrow {
            top: 0
        }

        .bs-tooltip-auto[x-placement^=bottom] .arrow::before,
        .bs-tooltip-bottom .arrow::before {
            bottom: 0;
            border-width: 0 .4rem .4rem;
            border-bottom-color: #000
        }

        .bs-tooltip-auto[x-placement^=left],
        .bs-tooltip-left {
            padding: 0 .4rem
        }

        .bs-tooltip-auto[x-placement^=left] .arrow,
        .bs-tooltip-left .arrow {
            right: 0;
            width: .4rem;
            height: .8rem
        }

        .bs-tooltip-auto[x-placement^=left] .arrow::before,
        .bs-tooltip-left .arrow::before {
            left: 0;
            border-width: .4rem 0 .4rem .4rem;
            border-left-color: #000
        }

        .tooltip-inner {
            max-width: 200px;
            padding: .25rem .5rem;
            color: #fff;
            text-align: center;
            background-color: #000;
            border-radius: .25rem
        }

        .popover {
            position: absolute;
            top: 0;
            left: 0;
            z-index: 1060;
            display: block;
            max-width: 276px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-style: normal;
            font-weight: 400;
            line-height: 1.5;
            text-align: left;
            text-align: start;
            text-decoration: none;
            text-shadow: none;
            text-transform: none;
            letter-spacing: normal;
            word-break: normal;
            word-spacing: normal;
            white-space: normal;
            line-break: auto;
            font-size: .875rem;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid rgba(0, 0, 0, .2);
            border-radius: .3rem
        }

        .popover .arrow {
            position: absolute;
            display: block;
            width: 1rem;
            height: .5rem;
            margin: 0 .3rem
        }

        .popover .arrow::after,
        .popover .arrow::before {
            position: absolute;
            display: block;
            content: "";
            border-color: transparent;
            border-style: solid
        }

        .bs-popover-auto[x-placement^=top],
        .bs-popover-top {
            margin-bottom: .5rem
        }

        .bs-popover-auto[x-placement^=top]>.arrow,
        .bs-popover-top>.arrow {
            bottom: calc(-.5rem - 1px)
        }

        .bs-popover-auto[x-placement^=top]>.arrow::before,
        .bs-popover-top>.arrow::before {
            bottom: 0;
            border-width: .5rem .5rem 0;
            border-top-color: rgba(0, 0, 0, .25)
        }

        .bs-popover-auto[x-placement^=top]>.arrow::after,
        .bs-popover-top>.arrow::after {
            bottom: 1px;
            border-width: .5rem .5rem 0;
            border-top-color: #fff
        }

        .bs-popover-auto[x-placement^=right],
        .bs-popover-right {
            margin-left: .5rem
        }

        .bs-popover-auto[x-placement^=right]>.arrow,
        .bs-popover-right>.arrow {
            left: calc(-.5rem - 1px);
            width: .5rem;
            height: 1rem;
            margin: .3rem 0
        }

        .bs-popover-auto[x-placement^=right]>.arrow::before,
        .bs-popover-right>.arrow::before {
            left: 0;
            border-width: .5rem .5rem .5rem 0;
            border-right-color: rgba(0, 0, 0, .25)
        }

        .bs-popover-auto[x-placement^=right]>.arrow::after,
        .bs-popover-right>.arrow::after {
            left: 1px;
            border-width: .5rem .5rem .5rem 0;
            border-right-color: #fff
        }

        .bs-popover-auto[x-placement^=bottom],
        .bs-popover-bottom {
            margin-top: .5rem
        }

        .bs-popover-auto[x-placement^=bottom]>.arrow,
        .bs-popover-bottom>.arrow {
            top: calc(-.5rem - 1px)
        }

        .bs-popover-auto[x-placement^=bottom]>.arrow::before,
        .bs-popover-bottom>.arrow::before {
            top: 0;
            border-width: 0 .5rem .5rem .5rem;
            border-bottom-color: rgba(0, 0, 0, .25)
        }

        .bs-popover-auto[x-placement^=bottom]>.arrow::after,
        .bs-popover-bottom>.arrow::after {
            top: 1px;
            border-width: 0 .5rem .5rem .5rem;
            border-bottom-color: #fff
        }

        .bs-popover-auto[x-placement^=bottom] .popover-header::before,
        .bs-popover-bottom .popover-header::before {
            position: absolute;
            top: 0;
            left: 50%;
            display: block;
            width: 1rem;
            margin-left: -.5rem;
            content: "";
            border-bottom: 1px solid #f7f7f7
        }

        .bs-popover-auto[x-placement^=left],
        .bs-popover-left {
            margin-right: .5rem
        }

        .bs-popover-auto[x-placement^=left]>.arrow,
        .bs-popover-left>.arrow {
            right: calc(-.5rem - 1px);
            width: .5rem;
            height: 1rem;
            margin: .3rem 0
        }

        .bs-popover-auto[x-placement^=left]>.arrow::before,
        .bs-popover-left>.arrow::before {
            right: 0;
            border-width: .5rem 0 .5rem .5rem;
            border-left-color: rgba(0, 0, 0, .25)
        }

        .bs-popover-auto[x-placement^=left]>.arrow::after,
        .bs-popover-left>.arrow::after {
            right: 1px;
            border-width: .5rem 0 .5rem .5rem;
            border-left-color: #fff
        }

        .popover-header {
            padding: .5rem .75rem;
            margin-bottom: 0;
            font-size: 1rem;
            background-color: #f7f7f7;
            border-bottom: 1px solid #ebebeb;
            border-top-left-radius: calc(.3rem - 1px);
            border-top-right-radius: calc(.3rem - 1px)
        }

        .popover-header:empty {
            display: none
        }

        .popover-body {
            padding: .5rem .75rem;
            color: #212529
        }

        .carousel {
            position: relative
        }

        .carousel.pointer-event {
            -ms-touch-action: pan-y;
            touch-action: pan-y
        }

        .carousel-inner {
            position: relative;
            width: 100%;
            overflow: hidden
        }

        .carousel-inner::after {
            display: block;
            clear: both;
            content: ""
        }

        .carousel-item {
            position: relative;
            display: none;
            float: left;
            width: 100%;
            margin-right: -100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            transition: -webkit-transform .6s ease-in-out;
            transition: transform .6s ease-in-out;
            transition: transform .6s ease-in-out, -webkit-transform .6s ease-in-out
        }

        @media (prefers-reduced-motion:reduce) {
            .carousel-item {
                transition: none
            }
        }

        .carousel-item-next,
        .carousel-item-prev,
        .carousel-item.active {
            display: block
        }

        .active.carousel-item-right,
        .carousel-item-next:not(.carousel-item-left) {
            -webkit-transform: translateX(100%);
            transform: translateX(100%)
        }

        .active.carousel-item-left,
        .carousel-item-prev:not(.carousel-item-right) {
            -webkit-transform: translateX(-100%);
            transform: translateX(-100%)
        }

        .carousel-fade .carousel-item {
            opacity: 0;
            transition-property: opacity;
            -webkit-transform: none;
            transform: none
        }

        .carousel-fade .carousel-item-next.carousel-item-left,
        .carousel-fade .carousel-item-prev.carousel-item-right,
        .carousel-fade .carousel-item.active {
            z-index: 1;
            opacity: 1
        }

        .carousel-fade .active.carousel-item-left,
        .carousel-fade .active.carousel-item-right {
            z-index: 0;
            opacity: 0;
            transition: opacity 0s .6s
        }

        @media (prefers-reduced-motion:reduce) {

            .carousel-fade .active.carousel-item-left,
            .carousel-fade .active.carousel-item-right {
                transition: none
            }
        }

        .carousel-control-next,
        .carousel-control-prev {
            position: absolute;
            top: 0;
            bottom: 0;
            z-index: 1;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            -ms-flex-pack: center;
            justify-content: center;
            width: 15%;
            color: #fff;
            text-align: center;
            opacity: .5;
            transition: opacity .15s ease
        }

        @media (prefers-reduced-motion:reduce) {

            .carousel-control-next,
            .carousel-control-prev {
                transition: none
            }
        }

        .carousel-control-next:focus,
        .carousel-control-next:hover,
        .carousel-control-prev:focus,
        .carousel-control-prev:hover {
            color: #fff;
            text-decoration: none;
            outline: 0;
            opacity: .9
        }

        .carousel-control-prev {
            left: 0
        }

        .carousel-control-next {
            right: 0
        }

        .carousel-control-next-icon,
        .carousel-control-prev-icon {
            display: inline-block;
            width: 20px;
            height: 20px;
            background: 50%/100% 100% no-repeat
        }

        .carousel-control-prev-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath d='M5.25 0l-4 4 4 4 1.5-1.5L4.25 4l2.5-2.5L5.25 0z'/%3e%3c/svg%3e")
        }

        .carousel-control-next-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath d='M2.75 0l-1.5 1.5L3.75 4l-2.5 2.5L2.75 8l4-4-4-4z'/%3e%3c/svg%3e")
        }

        .carousel-indicators {
            position: absolute;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 15;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-pack: center;
            justify-content: center;
            padding-left: 0;
            margin-right: 15%;
            margin-left: 15%;
            list-style: none
        }

        .carousel-indicators li {
            box-sizing: content-box;
            -ms-flex: 0 1 auto;
            flex: 0 1 auto;
            width: 30px;
            height: 3px;
            margin-right: 3px;
            margin-left: 3px;
            text-indent: -999px;
            cursor: pointer;
            background-color: #fff;
            background-clip: padding-box;
            border-top: 10px solid transparent;
            border-bottom: 10px solid transparent;
            opacity: .5;
            transition: opacity .6s ease
        }

        @media (prefers-reduced-motion:reduce) {
            .carousel-indicators li {
                transition: none
            }
        }

        .carousel-indicators .active {
            opacity: 1
        }

        .carousel-caption {
            position: absolute;
            right: 15%;
            bottom: 20px;
            left: 15%;
            z-index: 10;
            padding-top: 20px;
            padding-bottom: 20px;
            color: #fff;
            text-align: center
        }

        @-webkit-keyframes spinner-border {
            to {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }

        @keyframes spinner-border {
            to {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }

        .spinner-border {
            display: inline-block;
            width: 2rem;
            height: 2rem;
            vertical-align: text-bottom;
            border: .25em solid currentColor;
            border-right-color: transparent;
            border-radius: 50%;
            -webkit-animation: .75s linear infinite spinner-border;
            animation: .75s linear infinite spinner-border
        }

        .spinner-border-sm {
            width: 1rem;
            height: 1rem;
            border-width: .2em
        }

        @-webkit-keyframes spinner-grow {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0)
            }

            50% {
                opacity: 1;
                -webkit-transform: none;
                transform: none
            }
        }

        @keyframes spinner-grow {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0)
            }

            50% {
                opacity: 1;
                -webkit-transform: none;
                transform: none
            }
        }

        .spinner-grow {
            display: inline-block;
            width: 2rem;
            height: 2rem;
            vertical-align: text-bottom;
            background-color: currentColor;
            border-radius: 50%;
            opacity: 0;
            -webkit-animation: .75s linear infinite spinner-grow;
            animation: .75s linear infinite spinner-grow
        }

        .spinner-grow-sm {
            width: 1rem;
            height: 1rem
        }

        @media (prefers-reduced-motion:reduce) {

            .spinner-border,
            .spinner-grow {
                -webkit-animation-duration: 1.5s;
                animation-duration: 1.5s
            }
        }

        .align-baseline {
            vertical-align: baseline !important
        }

        .align-top {
            vertical-align: top !important
        }

        .align-middle {
            vertical-align: middle !important
        }

        .align-bottom {
            vertical-align: bottom !important
        }

        .align-text-bottom {
            vertical-align: text-bottom !important
        }

        .align-text-top {
            vertical-align: text-top !important
        }

        .bg-primary {
            background-color: #007bff !important
        }

        a.bg-primary:focus,
        a.bg-primary:hover,
        button.bg-primary:focus,
        button.bg-primary:hover {
            background-color: #0062cc !important
        }

        .bg-secondary {
            background-color: #6c757d !important
        }

        a.bg-secondary:focus,
        a.bg-secondary:hover,
        button.bg-secondary:focus,
        button.bg-secondary:hover {
            background-color: #545b62 !important
        }

        .bg-success {
            background-color: #28a745 !important
        }

        a.bg-success:focus,
        a.bg-success:hover,
        button.bg-success:focus,
        button.bg-success:hover {
            background-color: #1e7e34 !important
        }

        .bg-info {
            background-color: #17a2b8 !important
        }

        a.bg-info:focus,
        a.bg-info:hover,
        button.bg-info:focus,
        button.bg-info:hover {
            background-color: #117a8b !important
        }

        .bg-warning {
            background-color: #ffc107 !important
        }

        a.bg-warning:focus,
        a.bg-warning:hover,
        button.bg-warning:focus,
        button.bg-warning:hover {
            background-color: #d39e00 !important
        }

        .bg-danger {
            background-color: #dc3545 !important
        }

        a.bg-danger:focus,
        a.bg-danger:hover,
        button.bg-danger:focus,
        button.bg-danger:hover {
            background-color: #bd2130 !important
        }

        .bg-light {
            background-color: #f8f9fa !important
        }

        a.bg-light:focus,
        a.bg-light:hover,
        button.bg-light:focus,
        button.bg-light:hover {
            background-color: #dae0e5 !important
        }

        .bg-dark {
            background-color: #343a40 !important
        }

        a.bg-dark:focus,
        a.bg-dark:hover,
        button.bg-dark:focus,
        button.bg-dark:hover {
            background-color: #1d2124 !important
        }

        .bg-white {
            background-color: #fff !important
        }

        .bg-transparent {
            background-color: transparent !important
        }

        .border {
            border: 1px solid #dee2e6 !important
        }

        .border-top {
            border-top: 1px solid #dee2e6 !important
        }

        .border-right {
            border-right: 1px solid #dee2e6 !important
        }

        .border-bottom {
            border-bottom: 1px solid #dee2e6 !important
        }

        .border-left {
            border-left: 1px solid #dee2e6 !important
        }

        .border-0 {
            border: 0 !important
        }

        .border-top-0 {
            border-top: 0 !important
        }

        .border-right-0 {
            border-right: 0 !important
        }

        .border-bottom-0 {
            border-bottom: 0 !important
        }

        .border-left-0 {
            border-left: 0 !important
        }

        .border-primary {
            border-color: #007bff !important
        }

        .border-secondary {
            border-color: #6c757d !important
        }

        .border-success {
            border-color: #28a745 !important
        }

        .border-info {
            border-color: #17a2b8 !important
        }

        .border-warning {
            border-color: #ffc107 !important
        }

        .border-danger {
            border-color: #dc3545 !important
        }

        .border-light {
            border-color: #f8f9fa !important
        }

        .border-dark {
            border-color: #343a40 !important
        }

        .border-white {
            border-color: #fff !important
        }

        .rounded-sm {
            border-radius: .2rem !important
        }

        .rounded {
            border-radius: .25rem !important
        }

        .rounded-top {
            border-top-left-radius: .25rem !important;
            border-top-right-radius: .25rem !important
        }

        .rounded-right {
            border-top-right-radius: .25rem !important;
            border-bottom-right-radius: .25rem !important
        }

        .rounded-bottom {
            border-bottom-right-radius: .25rem !important;
            border-bottom-left-radius: .25rem !important
        }

        .rounded-left {
            border-top-left-radius: .25rem !important;
            border-bottom-left-radius: .25rem !important
        }

        .rounded-lg {
            border-radius: .3rem !important
        }

        .rounded-circle {
            border-radius: 50% !important
        }

        .rounded-pill {
            border-radius: 50rem !important
        }

        .rounded-0 {
            border-radius: 0 !important
        }

        .clearfix::after {
            display: block;
            clear: both;
            content: ""
        }

        .d-none {
            display: none !important
        }

        .d-inline {
            display: inline !important
        }

        .d-inline-block {
            display: inline-block !important
        }

        .d-block {
            display: block !important
        }

        .d-table {
            display: table !important
        }

        .d-table-row {
            display: table-row !important
        }

        .d-table-cell {
            display: table-cell !important
        }

        .d-flex {
            display: -ms-flexbox !important;
            display: flex !important
        }

        .d-inline-flex {
            display: -ms-inline-flexbox !important;
            display: inline-flex !important
        }

        @media (min-width:576px) {
            .d-sm-none {
                display: none !important
            }

            .d-sm-inline {
                display: inline !important
            }

            .d-sm-inline-block {
                display: inline-block !important
            }

            .d-sm-block {
                display: block !important
            }

            .d-sm-table {
                display: table !important
            }

            .d-sm-table-row {
                display: table-row !important
            }

            .d-sm-table-cell {
                display: table-cell !important
            }

            .d-sm-flex {
                display: -ms-flexbox !important;
                display: flex !important
            }

            .d-sm-inline-flex {
                display: -ms-inline-flexbox !important;
                display: inline-flex !important
            }
        }

        @media (min-width:768px) {
            .d-md-none {
                display: none !important
            }

            .d-md-inline {
                display: inline !important
            }

            .d-md-inline-block {
                display: inline-block !important
            }

            .d-md-block {
                display: block !important
            }

            .d-md-table {
                display: table !important
            }

            .d-md-table-row {
                display: table-row !important
            }

            .d-md-table-cell {
                display: table-cell !important
            }

            .d-md-flex {
                display: -ms-flexbox !important;
                display: flex !important
            }

            .d-md-inline-flex {
                display: -ms-inline-flexbox !important;
                display: inline-flex !important
            }
        }

        @media (min-width:992px) {
            .d-lg-none {
                display: none !important
            }

            .d-lg-inline {
                display: inline !important
            }

            .d-lg-inline-block {
                display: inline-block !important
            }

            .d-lg-block {
                display: block !important
            }

            .d-lg-table {
                display: table !important
            }

            .d-lg-table-row {
                display: table-row !important
            }

            .d-lg-table-cell {
                display: table-cell !important
            }

            .d-lg-flex {
                display: -ms-flexbox !important;
                display: flex !important
            }

            .d-lg-inline-flex {
                display: -ms-inline-flexbox !important;
                display: inline-flex !important
            }
        }

        @media (min-width:1200px) {
            .d-xl-none {
                display: none !important
            }

            .d-xl-inline {
                display: inline !important
            }

            .d-xl-inline-block {
                display: inline-block !important
            }

            .d-xl-block {
                display: block !important
            }

            .d-xl-table {
                display: table !important
            }

            .d-xl-table-row {
                display: table-row !important
            }

            .d-xl-table-cell {
                display: table-cell !important
            }

            .d-xl-flex {
                display: -ms-flexbox !important;
                display: flex !important
            }

            .d-xl-inline-flex {
                display: -ms-inline-flexbox !important;
                display: inline-flex !important
            }
        }

        @media print {
            .d-print-none {
                display: none !important
            }

            .d-print-inline {
                display: inline !important
            }

            .d-print-inline-block {
                display: inline-block !important
            }

            .d-print-block {
                display: block !important
            }

            .d-print-table {
                display: table !important
            }

            .d-print-table-row {
                display: table-row !important
            }

            .d-print-table-cell {
                display: table-cell !important
            }

            .d-print-flex {
                display: -ms-flexbox !important;
                display: flex !important
            }

            .d-print-inline-flex {
                display: -ms-inline-flexbox !important;
                display: inline-flex !important
            }
        }

        .embed-responsive {
            position: relative;
            display: block;
            width: 100%;
            padding: 0;
            overflow: hidden
        }

        .embed-responsive::before {
            display: block;
            content: ""
        }

        .embed-responsive .embed-responsive-item,
        .embed-responsive embed,
        .embed-responsive iframe,
        .embed-responsive object,
        .embed-responsive video {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0
        }

        .embed-responsive-21by9::before {
            padding-top: 42.857143%
        }

        .embed-responsive-16by9::before {
            padding-top: 56.25%
        }

        .embed-responsive-4by3::before {
            padding-top: 75%
        }

        .embed-responsive-1by1::before {
            padding-top: 100%
        }

        .flex-row {
            -ms-flex-direction: row !important;
            flex-direction: row !important
        }

        .flex-column {
            -ms-flex-direction: column !important;
            flex-direction: column !important
        }

        .flex-row-reverse {
            -ms-flex-direction: row-reverse !important;
            flex-direction: row-reverse !important
        }

        .flex-column-reverse {
            -ms-flex-direction: column-reverse !important;
            flex-direction: column-reverse !important
        }

        .flex-wrap {
            -ms-flex-wrap: wrap !important;
            flex-wrap: wrap !important
        }

        .flex-nowrap {
            -ms-flex-wrap: nowrap !important;
            flex-wrap: nowrap !important
        }

        .flex-wrap-reverse {
            -ms-flex-wrap: wrap-reverse !important;
            flex-wrap: wrap-reverse !important
        }

        .flex-fill {
            -ms-flex: 1 1 auto !important;
            flex: 1 1 auto !important
        }

        .flex-grow-0 {
            -ms-flex-positive: 0 !important;
            flex-grow: 0 !important
        }

        .flex-grow-1 {
            -ms-flex-positive: 1 !important;
            flex-grow: 1 !important
        }

        .flex-shrink-0 {
            -ms-flex-negative: 0 !important;
            flex-shrink: 0 !important
        }

        .flex-shrink-1 {
            -ms-flex-negative: 1 !important;
            flex-shrink: 1 !important
        }

        .justify-content-start {
            -ms-flex-pack: start !important;
            justify-content: flex-start !important
        }

        .justify-content-end {
            -ms-flex-pack: end !important;
            justify-content: flex-end !important
        }

        .justify-content-center {
            -ms-flex-pack: center !important;
            justify-content: center !important
        }

        .justify-content-between {
            -ms-flex-pack: justify !important;
            justify-content: space-between !important
        }

        .justify-content-around {
            -ms-flex-pack: distribute !important;
            justify-content: space-around !important
        }

        .align-items-start {
            -ms-flex-align: start !important;
            align-items: flex-start !important
        }

        .align-items-end {
            -ms-flex-align: end !important;
            align-items: flex-end !important
        }

        .align-items-center {
            -ms-flex-align: center !important;
            align-items: center !important
        }

        .align-items-baseline {
            -ms-flex-align: baseline !important;
            align-items: baseline !important
        }

        .align-items-stretch {
            -ms-flex-align: stretch !important;
            align-items: stretch !important
        }

        .align-content-start {
            -ms-flex-line-pack: start !important;
            align-content: flex-start !important
        }

        .align-content-end {
            -ms-flex-line-pack: end !important;
            align-content: flex-end !important
        }

        .align-content-center {
            -ms-flex-line-pack: center !important;
            align-content: center !important
        }

        .align-content-between {
            -ms-flex-line-pack: justify !important;
            align-content: space-between !important
        }

        .align-content-around {
            -ms-flex-line-pack: distribute !important;
            align-content: space-around !important
        }

        .align-content-stretch {
            -ms-flex-line-pack: stretch !important;
            align-content: stretch !important
        }

        .align-self-auto {
            -ms-flex-item-align: auto !important;
            align-self: auto !important
        }

        .align-self-start {
            -ms-flex-item-align: start !important;
            align-self: flex-start !important
        }

        .align-self-end {
            -ms-flex-item-align: end !important;
            align-self: flex-end !important
        }

        .align-self-center {
            -ms-flex-item-align: center !important;
            align-self: center !important
        }

        .align-self-baseline {
            -ms-flex-item-align: baseline !important;
            align-self: baseline !important
        }

        .align-self-stretch {
            -ms-flex-item-align: stretch !important;
            align-self: stretch !important
        }

        @media (min-width:576px) {
            .flex-sm-row {
                -ms-flex-direction: row !important;
                flex-direction: row !important
            }

            .flex-sm-column {
                -ms-flex-direction: column !important;
                flex-direction: column !important
            }

            .flex-sm-row-reverse {
                -ms-flex-direction: row-reverse !important;
                flex-direction: row-reverse !important
            }

            .flex-sm-column-reverse {
                -ms-flex-direction: column-reverse !important;
                flex-direction: column-reverse !important
            }

            .flex-sm-wrap {
                -ms-flex-wrap: wrap !important;
                flex-wrap: wrap !important
            }

            .flex-sm-nowrap {
                -ms-flex-wrap: nowrap !important;
                flex-wrap: nowrap !important
            }

            .flex-sm-wrap-reverse {
                -ms-flex-wrap: wrap-reverse !important;
                flex-wrap: wrap-reverse !important
            }

            .flex-sm-fill {
                -ms-flex: 1 1 auto !important;
                flex: 1 1 auto !important
            }

            .flex-sm-grow-0 {
                -ms-flex-positive: 0 !important;
                flex-grow: 0 !important
            }

            .flex-sm-grow-1 {
                -ms-flex-positive: 1 !important;
                flex-grow: 1 !important
            }

            .flex-sm-shrink-0 {
                -ms-flex-negative: 0 !important;
                flex-shrink: 0 !important
            }

            .flex-sm-shrink-1 {
                -ms-flex-negative: 1 !important;
                flex-shrink: 1 !important
            }

            .justify-content-sm-start {
                -ms-flex-pack: start !important;
                justify-content: flex-start !important
            }

            .justify-content-sm-end {
                -ms-flex-pack: end !important;
                justify-content: flex-end !important
            }

            .justify-content-sm-center {
                -ms-flex-pack: center !important;
                justify-content: center !important
            }

            .justify-content-sm-between {
                -ms-flex-pack: justify !important;
                justify-content: space-between !important
            }

            .justify-content-sm-around {
                -ms-flex-pack: distribute !important;
                justify-content: space-around !important
            }

            .align-items-sm-start {
                -ms-flex-align: start !important;
                align-items: flex-start !important
            }

            .align-items-sm-end {
                -ms-flex-align: end !important;
                align-items: flex-end !important
            }

            .align-items-sm-center {
                -ms-flex-align: center !important;
                align-items: center !important
            }

            .align-items-sm-baseline {
                -ms-flex-align: baseline !important;
                align-items: baseline !important
            }

            .align-items-sm-stretch {
                -ms-flex-align: stretch !important;
                align-items: stretch !important
            }

            .align-content-sm-start {
                -ms-flex-line-pack: start !important;
                align-content: flex-start !important
            }

            .align-content-sm-end {
                -ms-flex-line-pack: end !important;
                align-content: flex-end !important
            }

            .align-content-sm-center {
                -ms-flex-line-pack: center !important;
                align-content: center !important
            }

            .align-content-sm-between {
                -ms-flex-line-pack: justify !important;
                align-content: space-between !important
            }

            .align-content-sm-around {
                -ms-flex-line-pack: distribute !important;
                align-content: space-around !important
            }

            .align-content-sm-stretch {
                -ms-flex-line-pack: stretch !important;
                align-content: stretch !important
            }

            .align-self-sm-auto {
                -ms-flex-item-align: auto !important;
                align-self: auto !important
            }

            .align-self-sm-start {
                -ms-flex-item-align: start !important;
                align-self: flex-start !important
            }

            .align-self-sm-end {
                -ms-flex-item-align: end !important;
                align-self: flex-end !important
            }

            .align-self-sm-center {
                -ms-flex-item-align: center !important;
                align-self: center !important
            }

            .align-self-sm-baseline {
                -ms-flex-item-align: baseline !important;
                align-self: baseline !important
            }

            .align-self-sm-stretch {
                -ms-flex-item-align: stretch !important;
                align-self: stretch !important
            }
        }

        @media (min-width:768px) {
            .flex-md-row {
                -ms-flex-direction: row !important;
                flex-direction: row !important
            }

            .flex-md-column {
                -ms-flex-direction: column !important;
                flex-direction: column !important
            }

            .flex-md-row-reverse {
                -ms-flex-direction: row-reverse !important;
                flex-direction: row-reverse !important
            }

            .flex-md-column-reverse {
                -ms-flex-direction: column-reverse !important;
                flex-direction: column-reverse !important
            }

            .flex-md-wrap {
                -ms-flex-wrap: wrap !important;
                flex-wrap: wrap !important
            }

            .flex-md-nowrap {
                -ms-flex-wrap: nowrap !important;
                flex-wrap: nowrap !important
            }

            .flex-md-wrap-reverse {
                -ms-flex-wrap: wrap-reverse !important;
                flex-wrap: wrap-reverse !important
            }

            .flex-md-fill {
                -ms-flex: 1 1 auto !important;
                flex: 1 1 auto !important
            }

            .flex-md-grow-0 {
                -ms-flex-positive: 0 !important;
                flex-grow: 0 !important
            }

            .flex-md-grow-1 {
                -ms-flex-positive: 1 !important;
                flex-grow: 1 !important
            }

            .flex-md-shrink-0 {
                -ms-flex-negative: 0 !important;
                flex-shrink: 0 !important
            }

            .flex-md-shrink-1 {
                -ms-flex-negative: 1 !important;
                flex-shrink: 1 !important
            }

            .justify-content-md-start {
                -ms-flex-pack: start !important;
                justify-content: flex-start !important
            }

            .justify-content-md-end {
                -ms-flex-pack: end !important;
                justify-content: flex-end !important
            }

            .justify-content-md-center {
                -ms-flex-pack: center !important;
                justify-content: center !important
            }

            .justify-content-md-between {
                -ms-flex-pack: justify !important;
                justify-content: space-between !important
            }

            .justify-content-md-around {
                -ms-flex-pack: distribute !important;
                justify-content: space-around !important
            }

            .align-items-md-start {
                -ms-flex-align: start !important;
                align-items: flex-start !important
            }

            .align-items-md-end {
                -ms-flex-align: end !important;
                align-items: flex-end !important
            }

            .align-items-md-center {
                -ms-flex-align: center !important;
                align-items: center !important
            }

            .align-items-md-baseline {
                -ms-flex-align: baseline !important;
                align-items: baseline !important
            }

            .align-items-md-stretch {
                -ms-flex-align: stretch !important;
                align-items: stretch !important
            }

            .align-content-md-start {
                -ms-flex-line-pack: start !important;
                align-content: flex-start !important
            }

            .align-content-md-end {
                -ms-flex-line-pack: end !important;
                align-content: flex-end !important
            }

            .align-content-md-center {
                -ms-flex-line-pack: center !important;
                align-content: center !important
            }

            .align-content-md-between {
                -ms-flex-line-pack: justify !important;
                align-content: space-between !important
            }

            .align-content-md-around {
                -ms-flex-line-pack: distribute !important;
                align-content: space-around !important
            }

            .align-content-md-stretch {
                -ms-flex-line-pack: stretch !important;
                align-content: stretch !important
            }

            .align-self-md-auto {
                -ms-flex-item-align: auto !important;
                align-self: auto !important
            }

            .align-self-md-start {
                -ms-flex-item-align: start !important;
                align-self: flex-start !important
            }

            .align-self-md-end {
                -ms-flex-item-align: end !important;
                align-self: flex-end !important
            }

            .align-self-md-center {
                -ms-flex-item-align: center !important;
                align-self: center !important
            }

            .align-self-md-baseline {
                -ms-flex-item-align: baseline !important;
                align-self: baseline !important
            }

            .align-self-md-stretch {
                -ms-flex-item-align: stretch !important;
                align-self: stretch !important
            }
        }

        @media (min-width:992px) {
            .flex-lg-row {
                -ms-flex-direction: row !important;
                flex-direction: row !important
            }

            .flex-lg-column {
                -ms-flex-direction: column !important;
                flex-direction: column !important
            }

            .flex-lg-row-reverse {
                -ms-flex-direction: row-reverse !important;
                flex-direction: row-reverse !important
            }

            .flex-lg-column-reverse {
                -ms-flex-direction: column-reverse !important;
                flex-direction: column-reverse !important
            }

            .flex-lg-wrap {
                -ms-flex-wrap: wrap !important;
                flex-wrap: wrap !important
            }

            .flex-lg-nowrap {
                -ms-flex-wrap: nowrap !important;
                flex-wrap: nowrap !important
            }

            .flex-lg-wrap-reverse {
                -ms-flex-wrap: wrap-reverse !important;
                flex-wrap: wrap-reverse !important
            }

            .flex-lg-fill {
                -ms-flex: 1 1 auto !important;
                flex: 1 1 auto !important
            }

            .flex-lg-grow-0 {
                -ms-flex-positive: 0 !important;
                flex-grow: 0 !important
            }

            .flex-lg-grow-1 {
                -ms-flex-positive: 1 !important;
                flex-grow: 1 !important
            }

            .flex-lg-shrink-0 {
                -ms-flex-negative: 0 !important;
                flex-shrink: 0 !important
            }

            .flex-lg-shrink-1 {
                -ms-flex-negative: 1 !important;
                flex-shrink: 1 !important
            }

            .justify-content-lg-start {
                -ms-flex-pack: start !important;
                justify-content: flex-start !important
            }

            .justify-content-lg-end {
                -ms-flex-pack: end !important;
                justify-content: flex-end !important
            }

            .justify-content-lg-center {
                -ms-flex-pack: center !important;
                justify-content: center !important
            }

            .justify-content-lg-between {
                -ms-flex-pack: justify !important;
                justify-content: space-between !important
            }

            .justify-content-lg-around {
                -ms-flex-pack: distribute !important;
                justify-content: space-around !important
            }

            .align-items-lg-start {
                -ms-flex-align: start !important;
                align-items: flex-start !important
            }

            .align-items-lg-end {
                -ms-flex-align: end !important;
                align-items: flex-end !important
            }

            .align-items-lg-center {
                -ms-flex-align: center !important;
                align-items: center !important
            }

            .align-items-lg-baseline {
                -ms-flex-align: baseline !important;
                align-items: baseline !important
            }

            .align-items-lg-stretch {
                -ms-flex-align: stretch !important;
                align-items: stretch !important
            }

            .align-content-lg-start {
                -ms-flex-line-pack: start !important;
                align-content: flex-start !important
            }

            .align-content-lg-end {
                -ms-flex-line-pack: end !important;
                align-content: flex-end !important
            }

            .align-content-lg-center {
                -ms-flex-line-pack: center !important;
                align-content: center !important
            }

            .align-content-lg-between {
                -ms-flex-line-pack: justify !important;
                align-content: space-between !important
            }

            .align-content-lg-around {
                -ms-flex-line-pack: distribute !important;
                align-content: space-around !important
            }

            .align-content-lg-stretch {
                -ms-flex-line-pack: stretch !important;
                align-content: stretch !important
            }

            .align-self-lg-auto {
                -ms-flex-item-align: auto !important;
                align-self: auto !important
            }

            .align-self-lg-start {
                -ms-flex-item-align: start !important;
                align-self: flex-start !important
            }

            .align-self-lg-end {
                -ms-flex-item-align: end !important;
                align-self: flex-end !important
            }

            .align-self-lg-center {
                -ms-flex-item-align: center !important;
                align-self: center !important
            }

            .align-self-lg-baseline {
                -ms-flex-item-align: baseline !important;
                align-self: baseline !important
            }

            .align-self-lg-stretch {
                -ms-flex-item-align: stretch !important;
                align-self: stretch !important
            }
        }

        @media (min-width:1200px) {
            .flex-xl-row {
                -ms-flex-direction: row !important;
                flex-direction: row !important
            }

            .flex-xl-column {
                -ms-flex-direction: column !important;
                flex-direction: column !important
            }

            .flex-xl-row-reverse {
                -ms-flex-direction: row-reverse !important;
                flex-direction: row-reverse !important
            }

            .flex-xl-column-reverse {
                -ms-flex-direction: column-reverse !important;
                flex-direction: column-reverse !important
            }

            .flex-xl-wrap {
                -ms-flex-wrap: wrap !important;
                flex-wrap: wrap !important
            }

            .flex-xl-nowrap {
                -ms-flex-wrap: nowrap !important;
                flex-wrap: nowrap !important
            }

            .flex-xl-wrap-reverse {
                -ms-flex-wrap: wrap-reverse !important;
                flex-wrap: wrap-reverse !important
            }

            .flex-xl-fill {
                -ms-flex: 1 1 auto !important;
                flex: 1 1 auto !important
            }

            .flex-xl-grow-0 {
                -ms-flex-positive: 0 !important;
                flex-grow: 0 !important
            }

            .flex-xl-grow-1 {
                -ms-flex-positive: 1 !important;
                flex-grow: 1 !important
            }

            .flex-xl-shrink-0 {
                -ms-flex-negative: 0 !important;
                flex-shrink: 0 !important
            }

            .flex-xl-shrink-1 {
                -ms-flex-negative: 1 !important;
                flex-shrink: 1 !important
            }

            .justify-content-xl-start {
                -ms-flex-pack: start !important;
                justify-content: flex-start !important
            }

            .justify-content-xl-end {
                -ms-flex-pack: end !important;
                justify-content: flex-end !important
            }

            .justify-content-xl-center {
                -ms-flex-pack: center !important;
                justify-content: center !important
            }

            .justify-content-xl-between {
                -ms-flex-pack: justify !important;
                justify-content: space-between !important
            }

            .justify-content-xl-around {
                -ms-flex-pack: distribute !important;
                justify-content: space-around !important
            }

            .align-items-xl-start {
                -ms-flex-align: start !important;
                align-items: flex-start !important
            }

            .align-items-xl-end {
                -ms-flex-align: end !important;
                align-items: flex-end !important
            }

            .align-items-xl-center {
                -ms-flex-align: center !important;
                align-items: center !important
            }

            .align-items-xl-baseline {
                -ms-flex-align: baseline !important;
                align-items: baseline !important
            }

            .align-items-xl-stretch {
                -ms-flex-align: stretch !important;
                align-items: stretch !important
            }

            .align-content-xl-start {
                -ms-flex-line-pack: start !important;
                align-content: flex-start !important
            }

            .align-content-xl-end {
                -ms-flex-line-pack: end !important;
                align-content: flex-end !important
            }

            .align-content-xl-center {
                -ms-flex-line-pack: center !important;
                align-content: center !important
            }

            .align-content-xl-between {
                -ms-flex-line-pack: justify !important;
                align-content: space-between !important
            }

            .align-content-xl-around {
                -ms-flex-line-pack: distribute !important;
                align-content: space-around !important
            }

            .align-content-xl-stretch {
                -ms-flex-line-pack: stretch !important;
                align-content: stretch !important
            }

            .align-self-xl-auto {
                -ms-flex-item-align: auto !important;
                align-self: auto !important
            }

            .align-self-xl-start {
                -ms-flex-item-align: start !important;
                align-self: flex-start !important
            }

            .align-self-xl-end {
                -ms-flex-item-align: end !important;
                align-self: flex-end !important
            }

            .align-self-xl-center {
                -ms-flex-item-align: center !important;
                align-self: center !important
            }

            .align-self-xl-baseline {
                -ms-flex-item-align: baseline !important;
                align-self: baseline !important
            }

            .align-self-xl-stretch {
                -ms-flex-item-align: stretch !important;
                align-self: stretch !important
            }
        }

        .float-left {
            float: left !important
        }

        .float-right {
            float: right !important
        }

        .float-none {
            float: none !important
        }

        @media (min-width:576px) {
            .float-sm-left {
                float: left !important
            }

            .float-sm-right {
                float: right !important
            }

            .float-sm-none {
                float: none !important
            }
        }

        @media (min-width:768px) {
            .float-md-left {
                float: left !important
            }

            .float-md-right {
                float: right !important
            }

            .float-md-none {
                float: none !important
            }
        }

        @media (min-width:992px) {
            .float-lg-left {
                float: left !important
            }

            .float-lg-right {
                float: right !important
            }

            .float-lg-none {
                float: none !important
            }
        }

        @media (min-width:1200px) {
            .float-xl-left {
                float: left !important
            }

            .float-xl-right {
                float: right !important
            }

            .float-xl-none {
                float: none !important
            }
        }

        .user-select-all {
            -webkit-user-select: all !important;
            -moz-user-select: all !important;
            user-select: all !important
        }

        .user-select-auto {
            -webkit-user-select: auto !important;
            -moz-user-select: auto !important;
            -ms-user-select: auto !important;
            user-select: auto !important
        }

        .user-select-none {
            -webkit-user-select: none !important;
            -moz-user-select: none !important;
            -ms-user-select: none !important;
            user-select: none !important
        }

        .overflow-auto {
            overflow: auto !important
        }

        .overflow-hidden {
            overflow: hidden !important
        }

        .position-static {
            position: static !important
        }

        .position-relative {
            position: relative !important
        }

        .position-absolute {
            position: absolute !important
        }

        .position-fixed {
            position: fixed !important
        }

        .position-sticky {
            position: -webkit-sticky !important;
            position: sticky !important
        }

        .fixed-top {
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
            z-index: 1030
        }

        .fixed-bottom {
            position: fixed;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1030
        }

        @supports ((position:-webkit-sticky) or (position:sticky)) {
            .sticky-top {
                position: -webkit-sticky;
                position: sticky;
                top: 0;
                z-index: 1020
            }
        }

        .sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border: 0
        }

        .sr-only-focusable:active,
        .sr-only-focusable:focus {
            position: static;
            width: auto;
            height: auto;
            overflow: visible;
            clip: auto;
            white-space: normal
        }

        .shadow-sm {
            box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075) !important
        }

        .shadow {
            box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15) !important
        }

        .shadow-lg {
            box-shadow: 0 1rem 3rem rgba(0, 0, 0, .175) !important
        }

        .shadow-none {
            box-shadow: none !important
        }

        .w-25 {
            width: 25% !important
        }

        .w-50 {
            width: 50% !important
        }

        .w-75 {
            width: 75% !important
        }

        .w-100 {
            width: 100% !important
        }

        .w-auto {
            width: auto !important
        }

        .h-25 {
            height: 25% !important
        }

        .h-50 {
            height: 50% !important
        }

        .h-75 {
            height: 75% !important
        }

        .h-100 {
            height: 100% !important
        }

        .h-auto {
            height: auto !important
        }

        .mw-100 {
            max-width: 100% !important
        }

        .mh-100 {
            max-height: 100% !important
        }

        .min-vw-100 {
            min-width: 100vw !important
        }

        .min-vh-100 {
            min-height: 100vh !important
        }

        .vw-100 {
            width: 100vw !important
        }

        .vh-100 {
            height: 100vh !important
        }

        .m-0 {
            margin: 0 !important
        }

        .mt-0,
        .my-0 {
            margin-top: 0 !important
        }

        .mr-0,
        .mx-0 {
            margin-right: 0 !important
        }

        .mb-0,
        .my-0 {
            margin-bottom: 0 !important
        }

        .ml-0,
        .mx-0 {
            margin-left: 0 !important
        }

        .m-1 {
            margin: .25rem !important
        }

        .mt-1,
        .my-1 {
            margin-top: .25rem !important
        }

        .mr-1,
        .mx-1 {
            margin-right: .25rem !important
        }

        .mb-1,
        .my-1 {
            margin-bottom: .25rem !important
        }

        .ml-1,
        .mx-1 {
            margin-left: .25rem !important
        }

        .m-2 {
            margin: .5rem !important
        }

        .mt-2,
        .my-2 {
            margin-top: .5rem !important
        }

        .mr-2,
        .mx-2 {
            margin-right: .5rem !important
        }

        .mb-2,
        .my-2 {
            margin-bottom: .5rem !important
        }

        .ml-2,
        .mx-2 {
            margin-left: .5rem !important
        }

        .m-3 {
            margin: 1rem !important
        }

        .mt-3,
        .my-3 {
            margin-top: 1rem !important
        }

        .mr-3,
        .mx-3 {
            margin-right: 1rem !important
        }

        .mb-3,
        .my-3 {
            margin-bottom: 1rem !important
        }

        .ml-3,
        .mx-3 {
            margin-left: 1rem !important
        }

        .m-4 {
            margin: 1.5rem !important
        }

        .mt-4,
        .my-4 {
            margin-top: 1.5rem !important
        }

        .mr-4,
        .mx-4 {
            margin-right: 1.5rem !important
        }

        .mb-4,
        .my-4 {
            margin-bottom: 1.5rem !important
        }

        .ml-4,
        .mx-4 {
            margin-left: 1.5rem !important
        }

        .m-5 {
            margin: 3rem !important
        }

        .mt-5,
        .my-5 {
            margin-top: 3rem !important
        }

        .mr-5,
        .mx-5 {
            margin-right: 3rem !important
        }

        .mb-5,
        .my-5 {
            margin-bottom: 3rem !important
        }

        .ml-5,
        .mx-5 {
            margin-left: 3rem !important
        }

        .p-0 {
            padding: 0 !important
        }

        .pt-0,
        .py-0 {
            padding-top: 0 !important
        }

        .pr-0,
        .px-0 {
            padding-right: 0 !important
        }

        .pb-0,
        .py-0 {
            padding-bottom: 0 !important
        }

        .pl-0,
        .px-0 {
            padding-left: 0 !important
        }

        .p-1 {
            padding: .25rem !important
        }

        .pt-1,
        .py-1 {
            padding-top: .25rem !important
        }

        .pr-1,
        .px-1 {
            padding-right: .25rem !important
        }

        .pb-1,
        .py-1 {
            padding-bottom: .25rem !important
        }

        .pl-1,
        .px-1 {
            padding-left: .25rem !important
        }

        .p-2 {
            padding: .5rem !important
        }

        .pt-2,
        .py-2 {
            padding-top: .5rem !important
        }

        .pr-2,
        .px-2 {
            padding-right: .5rem !important
        }

        .pb-2,
        .py-2 {
            padding-bottom: .5rem !important
        }

        .pl-2,
        .px-2 {
            padding-left: .5rem !important
        }

        .p-3 {
            padding: 1rem !important
        }

        .pt-3,
        .py-3 {
            padding-top: 1rem !important
        }

        .pr-3,
        .px-3 {
            padding-right: 1rem !important
        }

        .pb-3,
        .py-3 {
            padding-bottom: 1rem !important
        }

        .pl-3,
        .px-3 {
            padding-left: 1rem !important
        }

        .p-4 {
            padding: 1.5rem !important
        }

        .pt-4,
        .py-4 {
            padding-top: 1.5rem !important
        }

        .pr-4,
        .px-4 {
            padding-right: 1.5rem !important
        }

        .pb-4,
        .py-4 {
            padding-bottom: 1.5rem !important
        }

        .pl-4,
        .px-4 {
            padding-left: 1.5rem !important
        }

        .p-5 {
            padding: 3rem !important
        }

        .pt-5,
        .py-5 {
            padding-top: 3rem !important
        }

        .pr-5,
        .px-5 {
            padding-right: 3rem !important
        }

        .pb-5,
        .py-5 {
            padding-bottom: 3rem !important
        }

        .pl-5,
        .px-5 {
            padding-left: 3rem !important
        }

        .m-n1 {
            margin: -.25rem !important
        }

        .mt-n1,
        .my-n1 {
            margin-top: -.25rem !important
        }

        .mr-n1,
        .mx-n1 {
            margin-right: -.25rem !important
        }

        .mb-n1,
        .my-n1 {
            margin-bottom: -.25rem !important
        }

        .ml-n1,
        .mx-n1 {
            margin-left: -.25rem !important
        }

        .m-n2 {
            margin: -.5rem !important
        }

        .mt-n2,
        .my-n2 {
            margin-top: -.5rem !important
        }

        .mr-n2,
        .mx-n2 {
            margin-right: -.5rem !important
        }

        .mb-n2,
        .my-n2 {
            margin-bottom: -.5rem !important
        }

        .ml-n2,
        .mx-n2 {
            margin-left: -.5rem !important
        }

        .m-n3 {
            margin: -1rem !important
        }

        .mt-n3,
        .my-n3 {
            margin-top: -1rem !important
        }

        .mr-n3,
        .mx-n3 {
            margin-right: -1rem !important
        }

        .mb-n3,
        .my-n3 {
            margin-bottom: -1rem !important
        }

        .ml-n3,
        .mx-n3 {
            margin-left: -1rem !important
        }

        .m-n4 {
            margin: -1.5rem !important
        }

        .mt-n4,
        .my-n4 {
            margin-top: -1.5rem !important
        }

        .mr-n4,
        .mx-n4 {
            margin-right: -1.5rem !important
        }

        .mb-n4,
        .my-n4 {
            margin-bottom: -1.5rem !important
        }

        .ml-n4,
        .mx-n4 {
            margin-left: -1.5rem !important
        }

        .m-n5 {
            margin: -3rem !important
        }

        .mt-n5,
        .my-n5 {
            margin-top: -3rem !important
        }

        .mr-n5,
        .mx-n5 {
            margin-right: -3rem !important
        }

        .mb-n5,
        .my-n5 {
            margin-bottom: -3rem !important
        }

        .ml-n5,
        .mx-n5 {
            margin-left: -3rem !important
        }

        .m-auto {
            margin: auto !important
        }

        .mt-auto,
        .my-auto {
            margin-top: auto !important
        }

        .mr-auto,
        .mx-auto {
            margin-right: auto !important
        }

        .mb-auto,
        .my-auto {
            margin-bottom: auto !important
        }

        .ml-auto,
        .mx-auto {
            margin-left: auto !important
        }

        @media (min-width:576px) {
            .m-sm-0 {
                margin: 0 !important
            }

            .mt-sm-0,
            .my-sm-0 {
                margin-top: 0 !important
            }

            .mr-sm-0,
            .mx-sm-0 {
                margin-right: 0 !important
            }

            .mb-sm-0,
            .my-sm-0 {
                margin-bottom: 0 !important
            }

            .ml-sm-0,
            .mx-sm-0 {
                margin-left: 0 !important
            }

            .m-sm-1 {
                margin: .25rem !important
            }

            .mt-sm-1,
            .my-sm-1 {
                margin-top: .25rem !important
            }

            .mr-sm-1,
            .mx-sm-1 {
                margin-right: .25rem !important
            }

            .mb-sm-1,
            .my-sm-1 {
                margin-bottom: .25rem !important
            }

            .ml-sm-1,
            .mx-sm-1 {
                margin-left: .25rem !important
            }

            .m-sm-2 {
                margin: .5rem !important
            }

            .mt-sm-2,
            .my-sm-2 {
                margin-top: .5rem !important
            }

            .mr-sm-2,
            .mx-sm-2 {
                margin-right: .5rem !important
            }

            .mb-sm-2,
            .my-sm-2 {
                margin-bottom: .5rem !important
            }

            .ml-sm-2,
            .mx-sm-2 {
                margin-left: .5rem !important
            }

            .m-sm-3 {
                margin: 1rem !important
            }

            .mt-sm-3,
            .my-sm-3 {
                margin-top: 1rem !important
            }

            .mr-sm-3,
            .mx-sm-3 {
                margin-right: 1rem !important
            }

            .mb-sm-3,
            .my-sm-3 {
                margin-bottom: 1rem !important
            }

            .ml-sm-3,
            .mx-sm-3 {
                margin-left: 1rem !important
            }

            .m-sm-4 {
                margin: 1.5rem !important
            }

            .mt-sm-4,
            .my-sm-4 {
                margin-top: 1.5rem !important
            }

            .mr-sm-4,
            .mx-sm-4 {
                margin-right: 1.5rem !important
            }

            .mb-sm-4,
            .my-sm-4 {
                margin-bottom: 1.5rem !important
            }

            .ml-sm-4,
            .mx-sm-4 {
                margin-left: 1.5rem !important
            }

            .m-sm-5 {
                margin: 3rem !important
            }

            .mt-sm-5,
            .my-sm-5 {
                margin-top: 3rem !important
            }

            .mr-sm-5,
            .mx-sm-5 {
                margin-right: 3rem !important
            }

            .mb-sm-5,
            .my-sm-5 {
                margin-bottom: 3rem !important
            }

            .ml-sm-5,
            .mx-sm-5 {
                margin-left: 3rem !important
            }

            .p-sm-0 {
                padding: 0 !important
            }

            .pt-sm-0,
            .py-sm-0 {
                padding-top: 0 !important
            }

            .pr-sm-0,
            .px-sm-0 {
                padding-right: 0 !important
            }

            .pb-sm-0,
            .py-sm-0 {
                padding-bottom: 0 !important
            }

            .pl-sm-0,
            .px-sm-0 {
                padding-left: 0 !important
            }

            .p-sm-1 {
                padding: .25rem !important
            }

            .pt-sm-1,
            .py-sm-1 {
                padding-top: .25rem !important
            }

            .pr-sm-1,
            .px-sm-1 {
                padding-right: .25rem !important
            }

            .pb-sm-1,
            .py-sm-1 {
                padding-bottom: .25rem !important
            }

            .pl-sm-1,
            .px-sm-1 {
                padding-left: .25rem !important
            }

            .p-sm-2 {
                padding: .5rem !important
            }

            .pt-sm-2,
            .py-sm-2 {
                padding-top: .5rem !important
            }

            .pr-sm-2,
            .px-sm-2 {
                padding-right: .5rem !important
            }

            .pb-sm-2,
            .py-sm-2 {
                padding-bottom: .5rem !important
            }

            .pl-sm-2,
            .px-sm-2 {
                padding-left: .5rem !important
            }

            .p-sm-3 {
                padding: 1rem !important
            }

            .pt-sm-3,
            .py-sm-3 {
                padding-top: 1rem !important
            }

            .pr-sm-3,
            .px-sm-3 {
                padding-right: 1rem !important
            }

            .pb-sm-3,
            .py-sm-3 {
                padding-bottom: 1rem !important
            }

            .pl-sm-3,
            .px-sm-3 {
                padding-left: 1rem !important
            }

            .p-sm-4 {
                padding: 1.5rem !important
            }

            .pt-sm-4,
            .py-sm-4 {
                padding-top: 1.5rem !important
            }

            .pr-sm-4,
            .px-sm-4 {
                padding-right: 1.5rem !important
            }

            .pb-sm-4,
            .py-sm-4 {
                padding-bottom: 1.5rem !important
            }

            .pl-sm-4,
            .px-sm-4 {
                padding-left: 1.5rem !important
            }

            .p-sm-5 {
                padding: 3rem !important
            }

            .pt-sm-5,
            .py-sm-5 {
                padding-top: 3rem !important
            }

            .pr-sm-5,
            .px-sm-5 {
                padding-right: 3rem !important
            }

            .pb-sm-5,
            .py-sm-5 {
                padding-bottom: 3rem !important
            }

            .pl-sm-5,
            .px-sm-5 {
                padding-left: 3rem !important
            }

            .m-sm-n1 {
                margin: -.25rem !important
            }

            .mt-sm-n1,
            .my-sm-n1 {
                margin-top: -.25rem !important
            }

            .mr-sm-n1,
            .mx-sm-n1 {
                margin-right: -.25rem !important
            }

            .mb-sm-n1,
            .my-sm-n1 {
                margin-bottom: -.25rem !important
            }

            .ml-sm-n1,
            .mx-sm-n1 {
                margin-left: -.25rem !important
            }

            .m-sm-n2 {
                margin: -.5rem !important
            }

            .mt-sm-n2,
            .my-sm-n2 {
                margin-top: -.5rem !important
            }

            .mr-sm-n2,
            .mx-sm-n2 {
                margin-right: -.5rem !important
            }

            .mb-sm-n2,
            .my-sm-n2 {
                margin-bottom: -.5rem !important
            }

            .ml-sm-n2,
            .mx-sm-n2 {
                margin-left: -.5rem !important
            }

            .m-sm-n3 {
                margin: -1rem !important
            }

            .mt-sm-n3,
            .my-sm-n3 {
                margin-top: -1rem !important
            }

            .mr-sm-n3,
            .mx-sm-n3 {
                margin-right: -1rem !important
            }

            .mb-sm-n3,
            .my-sm-n3 {
                margin-bottom: -1rem !important
            }

            .ml-sm-n3,
            .mx-sm-n3 {
                margin-left: -1rem !important
            }

            .m-sm-n4 {
                margin: -1.5rem !important
            }

            .mt-sm-n4,
            .my-sm-n4 {
                margin-top: -1.5rem !important
            }

            .mr-sm-n4,
            .mx-sm-n4 {
                margin-right: -1.5rem !important
            }

            .mb-sm-n4,
            .my-sm-n4 {
                margin-bottom: -1.5rem !important
            }

            .ml-sm-n4,
            .mx-sm-n4 {
                margin-left: -1.5rem !important
            }

            .m-sm-n5 {
                margin: -3rem !important
            }

            .mt-sm-n5,
            .my-sm-n5 {
                margin-top: -3rem !important
            }

            .mr-sm-n5,
            .mx-sm-n5 {
                margin-right: -3rem !important
            }

            .mb-sm-n5,
            .my-sm-n5 {
                margin-bottom: -3rem !important
            }

            .ml-sm-n5,
            .mx-sm-n5 {
                margin-left: -3rem !important
            }

            .m-sm-auto {
                margin: auto !important
            }

            .mt-sm-auto,
            .my-sm-auto {
                margin-top: auto !important
            }

            .mr-sm-auto,
            .mx-sm-auto {
                margin-right: auto !important
            }

            .mb-sm-auto,
            .my-sm-auto {
                margin-bottom: auto !important
            }

            .ml-sm-auto,
            .mx-sm-auto {
                margin-left: auto !important
            }
        }

        @media (min-width:768px) {
            .m-md-0 {
                margin: 0 !important
            }

            .mt-md-0,
            .my-md-0 {
                margin-top: 0 !important
            }

            .mr-md-0,
            .mx-md-0 {
                margin-right: 0 !important
            }

            .mb-md-0,
            .my-md-0 {
                margin-bottom: 0 !important
            }

            .ml-md-0,
            .mx-md-0 {
                margin-left: 0 !important
            }

            .m-md-1 {
                margin: .25rem !important
            }

            .mt-md-1,
            .my-md-1 {
                margin-top: .25rem !important
            }

            .mr-md-1,
            .mx-md-1 {
                margin-right: .25rem !important
            }

            .mb-md-1,
            .my-md-1 {
                margin-bottom: .25rem !important
            }

            .ml-md-1,
            .mx-md-1 {
                margin-left: .25rem !important
            }

            .m-md-2 {
                margin: .5rem !important
            }

            .mt-md-2,
            .my-md-2 {
                margin-top: .5rem !important
            }

            .mr-md-2,
            .mx-md-2 {
                margin-right: .5rem !important
            }

            .mb-md-2,
            .my-md-2 {
                margin-bottom: .5rem !important
            }

            .ml-md-2,
            .mx-md-2 {
                margin-left: .5rem !important
            }

            .m-md-3 {
                margin: 1rem !important
            }

            .mt-md-3,
            .my-md-3 {
                margin-top: 1rem !important
            }

            .mr-md-3,
            .mx-md-3 {
                margin-right: 1rem !important
            }

            .mb-md-3,
            .my-md-3 {
                margin-bottom: 1rem !important
            }

            .ml-md-3,
            .mx-md-3 {
                margin-left: 1rem !important
            }

            .m-md-4 {
                margin: 1.5rem !important
            }

            .mt-md-4,
            .my-md-4 {
                margin-top: 1.5rem !important
            }

            .mr-md-4,
            .mx-md-4 {
                margin-right: 1.5rem !important
            }

            .mb-md-4,
            .my-md-4 {
                margin-bottom: 1.5rem !important
            }

            .ml-md-4,
            .mx-md-4 {
                margin-left: 1.5rem !important
            }

            .m-md-5 {
                margin: 3rem !important
            }

            .mt-md-5,
            .my-md-5 {
                margin-top: 3rem !important
            }

            .mr-md-5,
            .mx-md-5 {
                margin-right: 3rem !important
            }

            .mb-md-5,
            .my-md-5 {
                margin-bottom: 3rem !important
            }

            .ml-md-5,
            .mx-md-5 {
                margin-left: 3rem !important
            }

            .p-md-0 {
                padding: 0 !important
            }

            .pt-md-0,
            .py-md-0 {
                padding-top: 0 !important
            }

            .pr-md-0,
            .px-md-0 {
                padding-right: 0 !important
            }

            .pb-md-0,
            .py-md-0 {
                padding-bottom: 0 !important
            }

            .pl-md-0,
            .px-md-0 {
                padding-left: 0 !important
            }

            .p-md-1 {
                padding: .25rem !important
            }

            .pt-md-1,
            .py-md-1 {
                padding-top: .25rem !important
            }

            .pr-md-1,
            .px-md-1 {
                padding-right: .25rem !important
            }

            .pb-md-1,
            .py-md-1 {
                padding-bottom: .25rem !important
            }

            .pl-md-1,
            .px-md-1 {
                padding-left: .25rem !important
            }

            .p-md-2 {
                padding: .5rem !important
            }

            .pt-md-2,
            .py-md-2 {
                padding-top: .5rem !important
            }

            .pr-md-2,
            .px-md-2 {
                padding-right: .5rem !important
            }

            .pb-md-2,
            .py-md-2 {
                padding-bottom: .5rem !important
            }

            .pl-md-2,
            .px-md-2 {
                padding-left: .5rem !important
            }

            .p-md-3 {
                padding: 1rem !important
            }

            .pt-md-3,
            .py-md-3 {
                padding-top: 1rem !important
            }

            .pr-md-3,
            .px-md-3 {
                padding-right: 1rem !important
            }

            .pb-md-3,
            .py-md-3 {
                padding-bottom: 1rem !important
            }

            .pl-md-3,
            .px-md-3 {
                padding-left: 1rem !important
            }

            .p-md-4 {
                padding: 1.5rem !important
            }

            .pt-md-4,
            .py-md-4 {
                padding-top: 1.5rem !important
            }

            .pr-md-4,
            .px-md-4 {
                padding-right: 1.5rem !important
            }

            .pb-md-4,
            .py-md-4 {
                padding-bottom: 1.5rem !important
            }

            .pl-md-4,
            .px-md-4 {
                padding-left: 1.5rem !important
            }

            .p-md-5 {
                padding: 3rem !important
            }

            .pt-md-5,
            .py-md-5 {
                padding-top: 3rem !important
            }

            .pr-md-5,
            .px-md-5 {
                padding-right: 3rem !important
            }

            .pb-md-5,
            .py-md-5 {
                padding-bottom: 3rem !important
            }

            .pl-md-5,
            .px-md-5 {
                padding-left: 3rem !important
            }

            .m-md-n1 {
                margin: -.25rem !important
            }

            .mt-md-n1,
            .my-md-n1 {
                margin-top: -.25rem !important
            }

            .mr-md-n1,
            .mx-md-n1 {
                margin-right: -.25rem !important
            }

            .mb-md-n1,
            .my-md-n1 {
                margin-bottom: -.25rem !important
            }

            .ml-md-n1,
            .mx-md-n1 {
                margin-left: -.25rem !important
            }

            .m-md-n2 {
                margin: -.5rem !important
            }

            .mt-md-n2,
            .my-md-n2 {
                margin-top: -.5rem !important
            }

            .mr-md-n2,
            .mx-md-n2 {
                margin-right: -.5rem !important
            }

            .mb-md-n2,
            .my-md-n2 {
                margin-bottom: -.5rem !important
            }

            .ml-md-n2,
            .mx-md-n2 {
                margin-left: -.5rem !important
            }

            .m-md-n3 {
                margin: -1rem !important
            }

            .mt-md-n3,
            .my-md-n3 {
                margin-top: -1rem !important
            }

            .mr-md-n3,
            .mx-md-n3 {
                margin-right: -1rem !important
            }

            .mb-md-n3,
            .my-md-n3 {
                margin-bottom: -1rem !important
            }

            .ml-md-n3,
            .mx-md-n3 {
                margin-left: -1rem !important
            }

            .m-md-n4 {
                margin: -1.5rem !important
            }

            .mt-md-n4,
            .my-md-n4 {
                margin-top: -1.5rem !important
            }

            .mr-md-n4,
            .mx-md-n4 {
                margin-right: -1.5rem !important
            }

            .mb-md-n4,
            .my-md-n4 {
                margin-bottom: -1.5rem !important
            }

            .ml-md-n4,
            .mx-md-n4 {
                margin-left: -1.5rem !important
            }

            .m-md-n5 {
                margin: -3rem !important
            }

            .mt-md-n5,
            .my-md-n5 {
                margin-top: -3rem !important
            }

            .mr-md-n5,
            .mx-md-n5 {
                margin-right: -3rem !important
            }

            .mb-md-n5,
            .my-md-n5 {
                margin-bottom: -3rem !important
            }

            .ml-md-n5,
            .mx-md-n5 {
                margin-left: -3rem !important
            }

            .m-md-auto {
                margin: auto !important
            }

            .mt-md-auto,
            .my-md-auto {
                margin-top: auto !important
            }

            .mr-md-auto,
            .mx-md-auto {
                margin-right: auto !important
            }

            .mb-md-auto,
            .my-md-auto {
                margin-bottom: auto !important
            }

            .ml-md-auto,
            .mx-md-auto {
                margin-left: auto !important
            }
        }

        @media (min-width:992px) {
            .m-lg-0 {
                margin: 0 !important
            }

            .mt-lg-0,
            .my-lg-0 {
                margin-top: 0 !important
            }

            .mr-lg-0,
            .mx-lg-0 {
                margin-right: 0 !important
            }

            .mb-lg-0,
            .my-lg-0 {
                margin-bottom: 0 !important
            }

            .ml-lg-0,
            .mx-lg-0 {
                margin-left: 0 !important
            }

            .m-lg-1 {
                margin: .25rem !important
            }

            .mt-lg-1,
            .my-lg-1 {
                margin-top: .25rem !important
            }

            .mr-lg-1,
            .mx-lg-1 {
                margin-right: .25rem !important
            }

            .mb-lg-1,
            .my-lg-1 {
                margin-bottom: .25rem !important
            }

            .ml-lg-1,
            .mx-lg-1 {
                margin-left: .25rem !important
            }

            .m-lg-2 {
                margin: .5rem !important
            }

            .mt-lg-2,
            .my-lg-2 {
                margin-top: .5rem !important
            }

            .mr-lg-2,
            .mx-lg-2 {
                margin-right: .5rem !important
            }

            .mb-lg-2,
            .my-lg-2 {
                margin-bottom: .5rem !important
            }

            .ml-lg-2,
            .mx-lg-2 {
                margin-left: .5rem !important
            }

            .m-lg-3 {
                margin: 1rem !important
            }

            .mt-lg-3,
            .my-lg-3 {
                margin-top: 1rem !important
            }

            .mr-lg-3,
            .mx-lg-3 {
                margin-right: 1rem !important
            }

            .mb-lg-3,
            .my-lg-3 {
                margin-bottom: 1rem !important
            }

            .ml-lg-3,
            .mx-lg-3 {
                margin-left: 1rem !important
            }

            .m-lg-4 {
                margin: 1.5rem !important
            }

            .mt-lg-4,
            .my-lg-4 {
                margin-top: 1.5rem !important
            }

            .mr-lg-4,
            .mx-lg-4 {
                margin-right: 1.5rem !important
            }

            .mb-lg-4,
            .my-lg-4 {
                margin-bottom: 1.5rem !important
            }

            .ml-lg-4,
            .mx-lg-4 {
                margin-left: 1.5rem !important
            }

            .m-lg-5 {
                margin: 3rem !important
            }

            .mt-lg-5,
            .my-lg-5 {
                margin-top: 3rem !important
            }

            .mr-lg-5,
            .mx-lg-5 {
                margin-right: 3rem !important
            }

            .mb-lg-5,
            .my-lg-5 {
                margin-bottom: 3rem !important
            }

            .ml-lg-5,
            .mx-lg-5 {
                margin-left: 3rem !important
            }

            .p-lg-0 {
                padding: 0 !important
            }

            .pt-lg-0,
            .py-lg-0 {
                padding-top: 0 !important
            }

            .pr-lg-0,
            .px-lg-0 {
                padding-right: 0 !important
            }

            .pb-lg-0,
            .py-lg-0 {
                padding-bottom: 0 !important
            }

            .pl-lg-0,
            .px-lg-0 {
                padding-left: 0 !important
            }

            .p-lg-1 {
                padding: .25rem !important
            }

            .pt-lg-1,
            .py-lg-1 {
                padding-top: .25rem !important
            }

            .pr-lg-1,
            .px-lg-1 {
                padding-right: .25rem !important
            }

            .pb-lg-1,
            .py-lg-1 {
                padding-bottom: .25rem !important
            }

            .pl-lg-1,
            .px-lg-1 {
                padding-left: .25rem !important
            }

            .p-lg-2 {
                padding: .5rem !important
            }

            .pt-lg-2,
            .py-lg-2 {
                padding-top: .5rem !important
            }

            .pr-lg-2,
            .px-lg-2 {
                padding-right: .5rem !important
            }

            .pb-lg-2,
            .py-lg-2 {
                padding-bottom: .5rem !important
            }

            .pl-lg-2,
            .px-lg-2 {
                padding-left: .5rem !important
            }

            .p-lg-3 {
                padding: 1rem !important
            }

            .pt-lg-3,
            .py-lg-3 {
                padding-top: 1rem !important
            }

            .pr-lg-3,
            .px-lg-3 {
                padding-right: 1rem !important
            }

            .pb-lg-3,
            .py-lg-3 {
                padding-bottom: 1rem !important
            }

            .pl-lg-3,
            .px-lg-3 {
                padding-left: 1rem !important
            }

            .p-lg-4 {
                padding: 1.5rem !important
            }

            .pt-lg-4,
            .py-lg-4 {
                padding-top: 1.5rem !important
            }

            .pr-lg-4,
            .px-lg-4 {
                padding-right: 1.5rem !important
            }

            .pb-lg-4,
            .py-lg-4 {
                padding-bottom: 1.5rem !important
            }

            .pl-lg-4,
            .px-lg-4 {
                padding-left: 1.5rem !important
            }

            .p-lg-5 {
                padding: 3rem !important
            }

            .pt-lg-5,
            .py-lg-5 {
                padding-top: 3rem !important
            }

            .pr-lg-5,
            .px-lg-5 {
                padding-right: 3rem !important
            }

            .pb-lg-5,
            .py-lg-5 {
                padding-bottom: 3rem !important
            }

            .pl-lg-5,
            .px-lg-5 {
                padding-left: 3rem !important
            }

            .m-lg-n1 {
                margin: -.25rem !important
            }

            .mt-lg-n1,
            .my-lg-n1 {
                margin-top: -.25rem !important
            }

            .mr-lg-n1,
            .mx-lg-n1 {
                margin-right: -.25rem !important
            }

            .mb-lg-n1,
            .my-lg-n1 {
                margin-bottom: -.25rem !important
            }

            .ml-lg-n1,
            .mx-lg-n1 {
                margin-left: -.25rem !important
            }

            .m-lg-n2 {
                margin: -.5rem !important
            }

            .mt-lg-n2,
            .my-lg-n2 {
                margin-top: -.5rem !important
            }

            .mr-lg-n2,
            .mx-lg-n2 {
                margin-right: -.5rem !important
            }

            .mb-lg-n2,
            .my-lg-n2 {
                margin-bottom: -.5rem !important
            }

            .ml-lg-n2,
            .mx-lg-n2 {
                margin-left: -.5rem !important
            }

            .m-lg-n3 {
                margin: -1rem !important
            }

            .mt-lg-n3,
            .my-lg-n3 {
                margin-top: -1rem !important
            }

            .mr-lg-n3,
            .mx-lg-n3 {
                margin-right: -1rem !important
            }

            .mb-lg-n3,
            .my-lg-n3 {
                margin-bottom: -1rem !important
            }

            .ml-lg-n3,
            .mx-lg-n3 {
                margin-left: -1rem !important
            }

            .m-lg-n4 {
                margin: -1.5rem !important
            }

            .mt-lg-n4,
            .my-lg-n4 {
                margin-top: -1.5rem !important
            }

            .mr-lg-n4,
            .mx-lg-n4 {
                margin-right: -1.5rem !important
            }

            .mb-lg-n4,
            .my-lg-n4 {
                margin-bottom: -1.5rem !important
            }

            .ml-lg-n4,
            .mx-lg-n4 {
                margin-left: -1.5rem !important
            }

            .m-lg-n5 {
                margin: -3rem !important
            }

            .mt-lg-n5,
            .my-lg-n5 {
                margin-top: -3rem !important
            }

            .mr-lg-n5,
            .mx-lg-n5 {
                margin-right: -3rem !important
            }

            .mb-lg-n5,
            .my-lg-n5 {
                margin-bottom: -3rem !important
            }

            .ml-lg-n5,
            .mx-lg-n5 {
                margin-left: -3rem !important
            }

            .m-lg-auto {
                margin: auto !important
            }

            .mt-lg-auto,
            .my-lg-auto {
                margin-top: auto !important
            }

            .mr-lg-auto,
            .mx-lg-auto {
                margin-right: auto !important
            }

            .mb-lg-auto,
            .my-lg-auto {
                margin-bottom: auto !important
            }

            .ml-lg-auto,
            .mx-lg-auto {
                margin-left: auto !important
            }
        }

        @media (min-width:1200px) {
            .m-xl-0 {
                margin: 0 !important
            }

            .mt-xl-0,
            .my-xl-0 {
                margin-top: 0 !important
            }

            .mr-xl-0,
            .mx-xl-0 {
                margin-right: 0 !important
            }

            .mb-xl-0,
            .my-xl-0 {
                margin-bottom: 0 !important
            }

            .ml-xl-0,
            .mx-xl-0 {
                margin-left: 0 !important
            }

            .m-xl-1 {
                margin: .25rem !important
            }

            .mt-xl-1,
            .my-xl-1 {
                margin-top: .25rem !important
            }

            .mr-xl-1,
            .mx-xl-1 {
                margin-right: .25rem !important
            }

            .mb-xl-1,
            .my-xl-1 {
                margin-bottom: .25rem !important
            }

            .ml-xl-1,
            .mx-xl-1 {
                margin-left: .25rem !important
            }

            .m-xl-2 {
                margin: .5rem !important
            }

            .mt-xl-2,
            .my-xl-2 {
                margin-top: .5rem !important
            }

            .mr-xl-2,
            .mx-xl-2 {
                margin-right: .5rem !important
            }

            .mb-xl-2,
            .my-xl-2 {
                margin-bottom: .5rem !important
            }

            .ml-xl-2,
            .mx-xl-2 {
                margin-left: .5rem !important
            }

            .m-xl-3 {
                margin: 1rem !important
            }

            .mt-xl-3,
            .my-xl-3 {
                margin-top: 1rem !important
            }

            .mr-xl-3,
            .mx-xl-3 {
                margin-right: 1rem !important
            }

            .mb-xl-3,
            .my-xl-3 {
                margin-bottom: 1rem !important
            }

            .ml-xl-3,
            .mx-xl-3 {
                margin-left: 1rem !important
            }

            .m-xl-4 {
                margin: 1.5rem !important
            }

            .mt-xl-4,
            .my-xl-4 {
                margin-top: 1.5rem !important
            }

            .mr-xl-4,
            .mx-xl-4 {
                margin-right: 1.5rem !important
            }

            .mb-xl-4,
            .my-xl-4 {
                margin-bottom: 1.5rem !important
            }

            .ml-xl-4,
            .mx-xl-4 {
                margin-left: 1.5rem !important
            }

            .m-xl-5 {
                margin: 3rem !important
            }

            .mt-xl-5,
            .my-xl-5 {
                margin-top: 3rem !important
            }

            .mr-xl-5,
            .mx-xl-5 {
                margin-right: 3rem !important
            }

            .mb-xl-5,
            .my-xl-5 {
                margin-bottom: 3rem !important
            }

            .ml-xl-5,
            .mx-xl-5 {
                margin-left: 3rem !important
            }

            .p-xl-0 {
                padding: 0 !important
            }

            .pt-xl-0,
            .py-xl-0 {
                padding-top: 0 !important
            }

            .pr-xl-0,
            .px-xl-0 {
                padding-right: 0 !important
            }

            .pb-xl-0,
            .py-xl-0 {
                padding-bottom: 0 !important
            }

            .pl-xl-0,
            .px-xl-0 {
                padding-left: 0 !important
            }

            .p-xl-1 {
                padding: .25rem !important
            }

            .pt-xl-1,
            .py-xl-1 {
                padding-top: .25rem !important
            }

            .pr-xl-1,
            .px-xl-1 {
                padding-right: .25rem !important
            }

            .pb-xl-1,
            .py-xl-1 {
                padding-bottom: .25rem !important
            }

            .pl-xl-1,
            .px-xl-1 {
                padding-left: .25rem !important
            }

            .p-xl-2 {
                padding: .5rem !important
            }

            .pt-xl-2,
            .py-xl-2 {
                padding-top: .5rem !important
            }

            .pr-xl-2,
            .px-xl-2 {
                padding-right: .5rem !important
            }

            .pb-xl-2,
            .py-xl-2 {
                padding-bottom: .5rem !important
            }

            .pl-xl-2,
            .px-xl-2 {
                padding-left: .5rem !important
            }

            .p-xl-3 {
                padding: 1rem !important
            }

            .pt-xl-3,
            .py-xl-3 {
                padding-top: 1rem !important
            }

            .pr-xl-3,
            .px-xl-3 {
                padding-right: 1rem !important
            }

            .pb-xl-3,
            .py-xl-3 {
                padding-bottom: 1rem !important
            }

            .pl-xl-3,
            .px-xl-3 {
                padding-left: 1rem !important
            }

            .p-xl-4 {
                padding: 1.5rem !important
            }

            .pt-xl-4,
            .py-xl-4 {
                padding-top: 1.5rem !important
            }

            .pr-xl-4,
            .px-xl-4 {
                padding-right: 1.5rem !important
            }

            .pb-xl-4,
            .py-xl-4 {
                padding-bottom: 1.5rem !important
            }

            .pl-xl-4,
            .px-xl-4 {
                padding-left: 1.5rem !important
            }

            .p-xl-5 {
                padding: 3rem !important
            }

            .pt-xl-5,
            .py-xl-5 {
                padding-top: 3rem !important
            }

            .pr-xl-5,
            .px-xl-5 {
                padding-right: 3rem !important
            }

            .pb-xl-5,
            .py-xl-5 {
                padding-bottom: 3rem !important
            }

            .pl-xl-5,
            .px-xl-5 {
                padding-left: 3rem !important
            }

            .m-xl-n1 {
                margin: -.25rem !important
            }

            .mt-xl-n1,
            .my-xl-n1 {
                margin-top: -.25rem !important
            }

            .mr-xl-n1,
            .mx-xl-n1 {
                margin-right: -.25rem !important
            }

            .mb-xl-n1,
            .my-xl-n1 {
                margin-bottom: -.25rem !important
            }

            .ml-xl-n1,
            .mx-xl-n1 {
                margin-left: -.25rem !important
            }

            .m-xl-n2 {
                margin: -.5rem !important
            }

            .mt-xl-n2,
            .my-xl-n2 {
                margin-top: -.5rem !important
            }

            .mr-xl-n2,
            .mx-xl-n2 {
                margin-right: -.5rem !important
            }

            .mb-xl-n2,
            .my-xl-n2 {
                margin-bottom: -.5rem !important
            }

            .ml-xl-n2,
            .mx-xl-n2 {
                margin-left: -.5rem !important
            }

            .m-xl-n3 {
                margin: -1rem !important
            }

            .mt-xl-n3,
            .my-xl-n3 {
                margin-top: -1rem !important
            }

            .mr-xl-n3,
            .mx-xl-n3 {
                margin-right: -1rem !important
            }

            .mb-xl-n3,
            .my-xl-n3 {
                margin-bottom: -1rem !important
            }

            .ml-xl-n3,
            .mx-xl-n3 {
                margin-left: -1rem !important
            }

            .m-xl-n4 {
                margin: -1.5rem !important
            }

            .mt-xl-n4,
            .my-xl-n4 {
                margin-top: -1.5rem !important
            }

            .mr-xl-n4,
            .mx-xl-n4 {
                margin-right: -1.5rem !important
            }

            .mb-xl-n4,
            .my-xl-n4 {
                margin-bottom: -1.5rem !important
            }

            .ml-xl-n4,
            .mx-xl-n4 {
                margin-left: -1.5rem !important
            }

            .m-xl-n5 {
                margin: -3rem !important
            }

            .mt-xl-n5,
            .my-xl-n5 {
                margin-top: -3rem !important
            }

            .mr-xl-n5,
            .mx-xl-n5 {
                margin-right: -3rem !important
            }

            .mb-xl-n5,
            .my-xl-n5 {
                margin-bottom: -3rem !important
            }

            .ml-xl-n5,
            .mx-xl-n5 {
                margin-left: -3rem !important
            }

            .m-xl-auto {
                margin: auto !important
            }

            .mt-xl-auto,
            .my-xl-auto {
                margin-top: auto !important
            }

            .mr-xl-auto,
            .mx-xl-auto {
                margin-right: auto !important
            }

            .mb-xl-auto,
            .my-xl-auto {
                margin-bottom: auto !important
            }

            .ml-xl-auto,
            .mx-xl-auto {
                margin-left: auto !important
            }
        }

        .stretched-link::after {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1;
            pointer-events: auto;
            content: "";
            background-color: rgba(0, 0, 0, 0)
        }

        .text-monospace {
            font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace !important
        }

        .text-justify {
            text-align: justify !important
        }

        .text-wrap {
            white-space: normal !important
        }

        .text-nowrap {
            white-space: nowrap !important
        }

        .text-truncate {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap
        }

        .text-left {
            text-align: left !important
        }

        .text-right {
            text-align: right !important
        }

        .text-center {
            text-align: center !important
        }

        @media (min-width:576px) {
            .text-sm-left {
                text-align: left !important
            }

            .text-sm-right {
                text-align: right !important
            }

            .text-sm-center {
                text-align: center !important
            }
        }

        @media (min-width:768px) {
            .text-md-left {
                text-align: left !important
            }

            .text-md-right {
                text-align: right !important
            }

            .text-md-center {
                text-align: center !important
            }
        }

        @media (min-width:992px) {
            .text-lg-left {
                text-align: left !important
            }

            .text-lg-right {
                text-align: right !important
            }

            .text-lg-center {
                text-align: center !important
            }
        }

        @media (min-width:1200px) {
            .text-xl-left {
                text-align: left !important
            }

            .text-xl-right {
                text-align: right !important
            }

            .text-xl-center {
                text-align: center !important
            }
        }

        .text-lowercase {
            text-transform: lowercase !important
        }

        .text-uppercase {
            text-transform: uppercase !important
        }

        .text-capitalize {
            text-transform: capitalize !important
        }

        .font-weight-light {
            font-weight: 300 !important
        }

        .font-weight-lighter {
            font-weight: lighter !important
        }

        .font-weight-normal {
            font-weight: 400 !important
        }

        .font-weight-bold {
            font-weight: 700 !important
        }

        .font-weight-bolder {
            font-weight: bolder !important
        }

        .font-italic {
            font-style: italic !important
        }

        .text-white {
            color: #fff !important
        }

        .text-primary {
            color: #007bff !important
        }

        a.text-primary:focus,
        a.text-primary:hover {
            color: #0056b3 !important
        }

        .text-secondary {
            color: #6c757d !important
        }

        a.text-secondary:focus,
        a.text-secondary:hover {
            color: #494f54 !important
        }

        .text-success {
            color: #28a745 !important
        }

        a.text-success:focus,
        a.text-success:hover {
            color: #19692c !important
        }

        .text-info {
            color: #17a2b8 !important
        }

        a.text-info:focus,
        a.text-info:hover {
            color: #0f6674 !important
        }

        .text-warning {
            color: #ffc107 !important
        }

        a.text-warning:focus,
        a.text-warning:hover {
            color: #ba8b00 !important
        }

        .text-danger {
            color: #dc3545 !important
        }

        a.text-danger:focus,
        a.text-danger:hover {
            color: #a71d2a !important
        }

        .text-light {
            color: #f8f9fa !important
        }

        a.text-light:focus,
        a.text-light:hover {
            color: #cbd3da !important
        }

        .text-dark {
            color: #343a40 !important
        }

        a.text-dark:focus,
        a.text-dark:hover {
            color: #121416 !important
        }

        .text-body {
            color: #212529 !important
        }

        .text-muted {
            color: #6c757d !important
        }

        .text-black-50 {
            color: rgba(0, 0, 0, .5) !important
        }

        .text-white-50 {
            color: rgba(255, 255, 255, .5) !important
        }

        .text-hide {
            font: 0/0 a;
            color: transparent;
            text-shadow: none;
            background-color: transparent;
            border: 0
        }

        .text-decoration-none {
            text-decoration: none !important
        }

        .text-break {
            word-break: break-word !important;
            word-wrap: break-word !important
        }

        .text-reset {
            color: inherit !important
        }

        .visible {
            visibility: visible !important
        }

        .invisible {
            visibility: hidden !important
        }

        @media print {

            *,
            ::after,
            ::before {
                text-shadow: none !important;
                box-shadow: none !important
            }

            a:not(.btn) {
                text-decoration: underline
            }

            abbr[title]::after {
                content: " (" attr(title) ")"
            }

            pre {
                white-space: pre-wrap !important
            }

            blockquote,
            pre {
                border: 1px solid #adb5bd;
                page-break-inside: avoid
            }

            thead {
                display: table-header-group
            }

            img,
            tr {
                page-break-inside: avoid
            }

            h2,
            h3,
            p {
                orphans: 3;
                widows: 3
            }

            h2,
            h3 {
                page-break-after: avoid
            }

            @page {
                size: a3
            }

            body {
                min-width: 992px !important
            }

            .container {
                min-width: 992px !important
            }

            .navbar {
                display: none
            }

            .badge {
                border: 1px solid #000
            }

            .table {
                border-collapse: collapse !important
            }

            .table td,
            .table th {
                background-color: #fff !important
            }

            .table-bordered td,
            .table-bordered th {
                border: 1px solid #dee2e6 !important
            }

            .table-dark {
                color: inherit
            }

            .table-dark tbody+tbody,
            .table-dark td,
            .table-dark th,
            .table-dark thead th {
                border-color: #dee2e6
            }

            .table .thead-dark th {
                color: inherit;
                border-color: #dee2e6
            }
        }

        /*# sourceMappingURL=bootstrap.min.css.map */
    </style>
    <style>
        .enLogo {
            color: #1E40AF;
        }

        @font-face {
            font-family: 'Material Icons';
            font-style: normal;
            font-weight: 400;
            src: url(../fonts/MaterialIcons-Regular.eot);
            /* For IE6-8 */
            src: local('Material Icons'),
                local('MaterialIcons-Regular'),
                url(../fonts/MaterialIcons-Regular.woff2) format('woff2'),
                url(../fonts/MaterialIcons-Regular.woff) format('woff'),
                url(../fonts/MaterialIcons-Regular.ttf) format('truetype');
        }

        @font-face {
            font-family: 'CircularStd';
            font-style: normal;
            font-weight: 400;
            src: local('Circular Std Book'), url('../fonts/CircularStd-Book.woff') format('woff');
        }

        @font-face {
            font-family: 'CircularStd';
            font-style: italic;
            font-weight: 400;
            src: local('Circular Std Book Italic'), url('../fonts/CircularStd-BookItalic.woff') format('woff');
        }

        @font-face {
            font-family: 'CircularStd';
            font-style: normal;
            font-weight: 500;
            src: local('Circular Std Medium'), url('../fonts/CircularStd-Medium.woff') format('woff');
        }

        @font-face {
            font-family: 'CircularStd';
            font-style: italic;
            font-weight: 500;
            src: local('Circular Std Medium Italic'), url('../fonts/CircularStd-MediumItalic.woff') format('woff');
        }

        @font-face {
            font-family: 'CircularStd';
            font-style: normal;
            font-weight: 600;
            src: local('Circular Std Bold'), url('../fonts/CircularStd-Bold.woff') format('woff');
        }

        @font-face {
            font-family: 'CircularStd';
            font-style: italic;
            font-weight: 600;
            src: local('Circular Std Bold Italic'), url('../fonts/CircularStd-BoldItalic.woff') format('woff');
        }

        @font-face {
            font-family: 'CircularStd';
            font-style: normal;
            font-weight: 800;
            src: local('Circular Std Black'), url('../fonts/CircularStd-Black.woff') format('woff');
        }

        @font-face {
            font-family: 'CircularStd';
            font-style: italic;
            font-weight: 800;
            src: local('Circular Std Black Italic'), url('../fonts/CircularStd-BlackItalic.woff') format('woff');
        }



        html {
            height: 100%;
        }

        body {
            font-family: 'CircularStd', sans-serif;
            font-size: .9375rem;
            color: #1f1f1f;
            background-color: #f7f7f7;
            min-height: 100%;
            overflow-x: hidden;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: CircularStd;
            margin-top: 0;
            font-weight: 500;
        }

        h1,
        .h1 {
            font-size: 2.25rem;
        }

        h2,
        .h2 {
            font-size: 1.875rem;
        }

        h3,
        .h3 {
            font-size: 1.5rem;
        }

        h4,
        .h4 {
            font-size: 1.125rem;
        }

        h5,
        .h5 {
            font-size: 0.875rem;
        }

        h6,
        .h6 {
            font-size: 0.75rem;
        }

        a:hover,
        a:active,
        a:focus {
            text-decoration: none;
            outline: none;
        }

        .form-control {
            border-color: #e3e3e3;
            box-shadow: none;
            font-size: 15px;
            height: 44px;
        }

        .form-control:focus {
            border-color: #ccc;
            box-shadow: none;
            outline: 0 none;
        }

        .form-control[disabled],
        fieldset[disabled] .form-control {
            cursor: not-allowed;
        }

        input,
        button,
        a {
            transition: all 0.4s ease;
            -moz-transition: all 0.4s ease;
            -o-transition: all 0.4s ease;
            -ms-transition: all 0.4s ease;
            -webkit-transition: all 0.4s ease;
        }

        input,
        input:focus,
        button,
        button:focus {
            outline: none;
        }

        input[type="file"] {
            height: auto;
        }

        input[type=text],
        input[type=password] {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        textarea.form-control {
            resize: vertical;
        }

        .navbar-nav>li {
            float: left;
        }

        .form-control-lg.form-control {
            border-radius: 4px;
            height: 46px;
        }

        .form-control-sm.form-control {
            height: 30px;
            border-radius: 0;
        }

        .input-group.input-group-lg .form-control {
            height: 46px;
        }

        .material-icons {
            font-family: 'Material Icons';
            font-weight: normal;
            font-style: normal;
            font-size: 24px;
            display: inline-block;
            line-height: 1;
            text-transform: none;
            letter-spacing: normal;
            word-wrap: normal;
            white-space: nowrap;
            direction: ltr;
            -webkit-font-smoothing: antialiased;
            text-rendering: optimizeLegibility;
            -moz-osx-font-smoothing: grayscale;
            font-feature-settings: 'liga';
        }

        .input-group-text {
            background-color: #f7f7f7;
            border-color: #e3e3e3;
        }

        select.form-control[multiple] option,
        select.form-control[size] option {
            border-radius: 3px;
            padding: 7px 12px;
        }

        select.form-control[multiple],
        select.form-control[size] {
            height: 200px;
            padding: 7px;
        }




        .table-responsive {
            white-space: nowrap;
            width: 100%;
        }

        .table {
            color: #333;
        }

        .table.table-white {
            background-color: #fff;
        }

        .table thead th {
            font-weight: 500;
            letter-spacing: 0.05em;
        }

        .table-striped>tbody>tr:nth-of-type(2n+1) {
            background-color: #f6f6f6;
        }

        table.table td h2 {
            display: inline-block;
            font-size: inherit;
            font-weight: 400;
            margin: 0;
            padding: 0;
            vertical-align: middle;
        }

        table.table td h2.table-avatar {
            align-items: center;
            display: inline-flex;
            font-size: inherit;
            font-weight: 400;
            margin: 0;
            padding: 0;
            vertical-align: middle;
            white-space: nowrap;
        }

        table.table td h2.table-avatar.blue-link a {
            color: #007bff;
        }

        table.table td h2 a {
            color: #333;
        }

        table.table td h2 a:hover {
            color: #f43b48;
        }

        table.table td h2 span {
            color: #888;
            display: block;
            font-size: 12px;
            margin-top: 3px;
        }

        table.dataTable {
            margin-bottom: 15px !important;
            margin-top: 15px !important;
        }

        .table-nowrap td,
        .table-nowrap th {
            white-space: nowrap
        }

        .table-hover tbody tr:hover {
            background-color: #f7f7f7;
            color: #212529;
        }

        table.dataTable thead>tr>th.sorting_asc,
        table.dataTable thead>tr>th.sorting_desc,
        table.dataTable thead>tr>th.sorting,
        table.dataTable thead>tr>td.sorting_asc,
        table.dataTable thead>tr>td.sorting_desc,
        table.dataTable thead>tr>td.sorting {
            padding-right: 30px !important;
        }

        .table.custom-table>tbody>tr>td,
        .table.custom-table>tbody>tr>th,
        .table.custom-table>tfoot>tr>td,
        .table.custom-table>tfoot>tr>th,
        .table.custom-table>thead>tr>td,
        .table.custom-table>thead>tr>th {
            padding: 10px 20px !important;
        }



        .p-20 {
            padding: 20px !important;
        }

        .p-t-0 {
            padding-top: 0 !important;
        }

        .m-0 {
            margin: 0 !important;
        }

        .m-r-5 {
            margin-right: 5px !important;
        }

        .m-r-10 {
            margin-right: 10px !important;
        }

        .m-l-5 {
            margin-left: 5px !important;
        }

        .m-l-15 {
            margin-left: 15px !important;
        }

        .m-t-5 {
            margin-top: 5px !important;
        }

        .m-t-0 {
            margin-top: 0 !important;
        }

        .m-t-10 {
            margin-top: 10px !important;
        }

        .m-t-15 {
            margin-top: 15px !important;
        }

        .m-t-20 {
            margin-top: 20px !important;
        }

        .m-t-30 {
            margin-top: 30px !important;
        }

        .m-t-50 {
            margin-top: 50px !important;
        }

        .m-b-5 {
            margin-bottom: 5px !important;
        }

        .m-b-10 {
            margin-bottom: 10px !important;
        }

        .m-b-15 {
            margin-bottom: 15px !important;
        }

        .m-b-20 {
            margin-bottom: 20px !important;
        }

        .m-b-30 {
            margin-bottom: 30px !important;
        }

        .w-40 {
            width: 40px;
        }

        .btn-md {
            height: 40px;
        }

        .block {
            display: block !important;
        }

        .text-ellipsis {
            display: block;
            max-width: 100%;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .text-muted-light {
            color: #aaa;
        }

        .text-xs {
            font-size: .75rem !important;
        }

        .text-sm {
            font-size: .875rem !important;
        }

        .text-lg {
            font-size: 1.25rem !important;
        }

        .text-xl {
            font-size: 1.5rem !important;
        }

        .font-18 {
            font-size: 18px;
        }

        .btn.btn-rounded {
            border-radius: 50px;
        }


        .btn {
            border-radius: 5px;
        }

        .btn.disabled,
        .btn:disabled {
            cursor: not-allowed;
        }

        .btn-white {
            background-color: #fff;
            border: 1px solid #ccc;
            color: #333;
        }

        .btn-white:focus,
        .btn-white:hover {
            background-color: #f7f7f7;
        }

        .rounded,
        .circle {
            border-radius: 500px;
        }

        .bg-purple,
        .badge-purple {
            background-color: #7460ee !important;
        }

        .bg-primary,
        .badge-primary {
            background-color: #f43b48 !important;
        }

        .bg-success,
        .badge-success {
            background-color: #55ce63 !important;
        }

        .bg-info,
        .badge-info {
            background-color: #009efb !important;
        }

        .bg-warning,
        .badge-warning {
            background-color: #ffbc34 !important;
        }

        .bg-danger,
        .badge-danger {
            background-color: #f62d51 !important;
        }

        .bg-white {
            background-color: #fff;
        }

        .text-primary,
        .dropdown-menu>li>a.text-primary {
            color: #f43b48;
        }

        .text-success,
        .dropdown-menu>li>a.text-success {
            color: #55ce63 !important;
        }

        .text-danger,
        .dropdown-menu>li>a.text-danger {
            color: #f62d51 !important;
        }

        .text-info,
        .dropdown-menu>li>a.text-info {
            color: #009efb !important;
        }

        .text-warning,
        .dropdown-menu>li>a.text-warning {
            color: #ffbc34 !important;
        }

        .text-purple,
        .dropdown-menu>li>a.text-purple {
            color: #7460ee !important;
        }

        .text-muted {
            color: #8e8e8e !important;
        }

        .btn-purple {
            background-color: #7460ee;
            border: 1px solid #7460ee;
            color: #fff;
        }

        .btn-purple:hover,
        .btn-purple:focus {
            background-color: #482fe9;
            border: 1px solid #482fe9;
        }

        .btn-primary {
            background-color: #f43b48;
            border: 1px solid #f43b48;
        }

        .btn-primary:hover,
        .btn-primary:focus,
        .btn-primary.active,
        .btn-primary:active,
        .open>.dropdown-toggle.btn-primary {
            background-color: #f10e1d;
            border: 1px solid #f10e1d;
        }

        .btn-primary.active.focus,
        .btn-primary.active:focus,
        .btn-primary.active:hover,
        .btn-primary.focus:active,
        .btn-primary:active:focus,
        .btn-primary:active:hover,
        .open>.dropdown-toggle.btn-primary.focus,
        .open>.dropdown-toggle.btn-primary:focus,
        .open>.dropdown-toggle.btn-primary:hover {
            background-color: #f10e1d;
            border: 1px solid #f10e1d;
        }

        .btn-primary.active:not(:disabled):not(.disabled),
        .btn-primary:active:not(:disabled):not(.disabled),
        .show>.btn-primary.dropdown-toggle {
            background-color: #f10e1d;
            border-color: #f10e1d;
            color: #fff;
        }

        .btn-primary.active:focus:not(:disabled):not(.disabled),
        .btn-primary:active:focus:not(:disabled):not(.disabled),
        .show>.btn-primary.dropdown-toggle:focus {
            box-shadow: unset;
        }

        .btn-primary.disabled,
        .btn-primary:disabled {
            background-color: #f43b48;
            border-color: #f43b48;
            color: #fff;
        }

        .btn-success {
            background-color: #55ce63;
            border: 1px solid #55ce63
        }

        .btn-success:hover,
        .btn-success:focus,
        .btn-success.active,
        .btn-success:active,
        .open>.dropdown-toggle.btn-success {
            background: #4ab657;
            border: 1px solid #4ab657;
            color: #fff;
        }

        .btn-success.active.focus,
        .btn-success.active:focus,
        .btn-success.active:hover,
        .btn-success.focus:active,
        .btn-success:active:focus,
        .btn-success:active:hover,
        .open>.dropdown-toggle.btn-success.focus,
        .open>.dropdown-toggle.btn-success:focus,
        .open>.dropdown-toggle.btn-success:hover {
            background: #4ab657;
            border: 1px solid #4ab657
        }

        .btn-success.active:focus:not(:disabled):not(.disabled),
        .btn-success:active:focus:not(:disabled):not(.disabled),
        .show>.btn-success.dropdown-toggle:focus {
            box-shadow: unset;
        }

        .btn-success.disabled,
        .btn-success:disabled {
            background-color: #55ce63;
            border-color: #55ce63;
            color: #fff;
        }

        .btn-info {
            background-color: #009efb;
            border: 1px solid #009efb
        }

        .btn-info:hover,
        .btn-info:focus,
        .btn-info.active,
        .btn-info:active,
        .open>.dropdown-toggle.btn-info {
            background-color: #028ee1;
            border: 1px solid #028ee1
        }

        .btn-info.active.focus,
        .btn-info.active:focus,
        .btn-info.active:hover,
        .btn-info.focus:active,
        .btn-info:active:focus,
        .btn-info:active:hover,
        .open>.dropdown-toggle.btn-info.focus,
        .open>.dropdown-toggle.btn-info:focus,
        .open>.dropdown-toggle.btn-info:hover {
            background-color: #028ee1;
            border: 1px solid #028ee1
        }

        .btn-info.active:focus:not(:disabled):not(.disabled),
        .btn-info:active:focus:not(:disabled):not(.disabled),
        .show>.btn-info.dropdown-toggle:focus {
            box-shadow: unset;
        }

        .btn-info.disabled,
        .btn-info:disabled {
            background-color: #009efb;
            border-color: #009efb;
            color: #fff;
        }

        .btn-warning {
            background: #ffbc34;
            border: 1px solid #ffbc34
        }

        .btn-warning:hover,
        .btn-warning:focus,
        .btn-warning.active,
        .btn-warning:active,
        .open>.dropdown-toggle.btn-warning {
            background: #e9ab2e;
            border: 1px solid #e9ab2e
        }

        .btn-warning.active.focus,
        .btn-warning.active:focus,
        .btn-warning.active:hover,
        .btn-warning.focus:active,
        .btn-warning:active:focus,
        .btn-warning:active:hover,
        .open>.dropdown-toggle.btn-warning.focus,
        .open>.dropdown-toggle.btn-warning:focus,
        .open>.dropdown-toggle.btn-warning:hover {
            background: #e9ab2e;
            border: 1px solid #e9ab2e
        }

        .btn-warning.active:focus:not(:disabled):not(.disabled),
        .btn-warning:active:focus:not(:disabled):not(.disabled),
        .show>.btn-warning.dropdown-toggle:focus {
            box-shadow: unset;
        }

        .btn-warning.disabled,
        .btn-warning:disabled {
            background-color: #ffbc34;
            border-color: #ffbc34;
            color: #fff;
        }

        .btn-danger {
            background: #f62d51;
            border: 1px solid #f62d51
        }

        .btn-danger:hover,
        .btn-danger:focus,
        .btn-danger.active,
        .btn-danger:active,
        .open>.dropdown-toggle.btn-danger {
            background-color: #e6294b;
            border: 1px solid #e6294b
        }

        .btn-danger.active.focus,
        .btn-danger.active:focus,
        .btn-danger.active:hover,
        .btn-danger.focus:active,
        .btn-danger:active:focus,
        .btn-danger:active:hover,
        .open>.dropdown-toggle.btn-danger.focus,
        .open>.dropdown-toggle.btn-danger:focus,
        .open>.dropdown-toggle.btn-danger:hover {
            background: #e9ab2e;
            border: 1px solid #e9ab2e
        }

        .btn-danger.active:focus:not(:disabled):not(.disabled),
        .btn-danger:active:focus:not(:disabled):not(.disabled),
        .show>.btn-danger.dropdown-toggle:focus {
            box-shadow: unset;
        }

        .btn-danger.disabled,
        .btn-danger:disabled {
            background-color: #f62d51;
            border-color: #f62d51;
            color: #fff;
        }

        .btn-custom {
            background: #f43b48;
            background: -moz-linear-gradient(left, #f43b48 0%, #453a94 100%);
            background: -webkit-linear-gradient(left, #f43b48 0%, #453a94 100%);
            background: -ms-linear-gradient(left, #f43b48 0%, #453a94 100%);
            background: linear-gradient(to right, #f43b48 0%, #453a94 100%);
            color: #fff;
        }

        .btn-custom.focus,
        .btn-custom:focus,
        .btn-custom:hover {
            background: #f43b48;
            background: -moz-linear-gradient(left, #f43b48 0%, #453a94 100%);
            background: -webkit-linear-gradient(left, #f43b48 0%, #453a94 100%);
            background: -ms-linear-gradient(left, #f43b48 0%, #453a94 100%);
            background: linear-gradient(to right, #f43b48 0%, #453a94 100%);
            color: #fff;
        }

        .pagination>.active>a,
        .pagination>.active>a:focus,
        .pagination>.active>a:hover,
        .pagination>.active>span,
        .pagination>.active>span:focus,
        .pagination>.active>span:hover {
            background-color: #f43b48;
            border-color: #f43b48;
        }

        .pagination>li>a,
        .pagination>li>span {
            color: #f43b48;
        }

        .page-link:hover {
            color: #f43b48;
        }

        .page-link:focus {
            box-shadow: unset;
        }

        .page-item.active .page-link {
            background-color: #f43b48;
            border-color: #f43b48;
        }

        .dropdown-menu {
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: 3px;
            transform-origin: left top 0;
            box-shadow: inherit;
            background-color: #fff;
        }

        .navbar-nav .open .dropdown-menu {
            background-color: #fff;
            border: 1px solid rgba(0, 0, 0, 0.1);
        }

        .dropdown-menu {
            font-size: 13px;
        }

        .btn-link,
        .btn-link:hover,
        .btn-link:focus,
        .btn-link:active {
            box-shadow: none;
        }

        .btn-link {
            color: #333;
        }

        .nav .open>a,
        .nav .open>a:focus,
        .nav .open>a:hover {
            background-color: rgba(0, 0, 0, 0.2);
        }

        .form-text {
            color: #999;
            font-size: 12px;
            margin-bottom: 7px;
            margin-top: 7px;
        }

        .btn.focus,
        .btn:focus {
            box-shadow: unset;
        }

        .dropdown-item.active,
        .dropdown-item:active {
            background-color: #f43b48;
        }

        .list-group-item {
            border: 1px solid #e3e3e3;
        }

        .custom-file {
            height: 44px;
        }

        .custom-file .custom-file-label {
            border: 1px solid #e3e3e3;
            height: 44px;
            margin-bottom: 0;
            padding: 10px 15px;
        }

        .custom-file-label::after {
            background-color: #f2f2f2;
            height: 42px;
            padding: 10px 15px;
        }

        .custom-file input[type="file"] {
            height: 44px;
        }

        .bg-inverse-primary {
            background: rgba(77, 138, 240, .2) !important;
            color: #4d8af0 !important;
        }

        .bg-inverse-secondary {
            background: rgba(194, 198, 209, .2) !important;
            color: #c2c6d1 !important;
        }

        .bg-inverse-success {
            background-color: rgba(15, 183, 107, 0.12) !important;
            color: #26af48 !important;
        }

        .bg-inverse-purple {
            background: rgba(108, 97, 246, .2) !important;
            color: #6c61f6 !important;
        }

        .bg-inverse-warning {
            background-color: rgba(255, 152, 0, 0.12) !important;
            color: #f39c12 !important;
        }

        .bg-inverse-danger {
            background-color: rgba(242, 17, 54, 0.12) !important;
            color: #e63c3c !important;
        }

        .bg-inverse-light {
            background: rgba(223, 223, 223, .2) !important;
            color: #dfdfdf !important;
        }

        .bg-inverse-dark {
            background: rgba(116, 118, 123, .2) !important;
            color: #74767b !important;
        }

        .bg-inverse-white {
            background: rgba(255, 255, 255, .2) !important;
            color: #fff !important;
        }

        .bg-inverse-info {
            background-color: rgba(2, 182, 179, 0.12) !important;
            color: #1db9aa !important;
        }

        .bg-inverse-default {
            background-color: rgba(40, 52, 71, 0.12) !important;
            color: #283447 !important;
        }

        .bg-gradient-primary {
            background: linear-gradient(to right, #6e00ff 10%, #6e00ff 100%);
        }

        .bg-gradient-secondary {
            background: linear-gradient(to bottom right, #f35c38 0, #f35c38 100%);
        }

        .bg-gradient-success {
            background: linear-gradient(to bottom right, #0ba408 0, #28e224 100%);
        }

        .bg-gradient-info {
            background: linear-gradient(to bottom right, #69c7de 0, #1e9fc4 100%);
        }

        .bg-gradient-warning {
            background: linear-gradient(to bottom right, #ecd53e 0, #efaf28 100%)
        }

        .bg-gradient-teal {
            background: linear-gradient(to bottom right, #00796b 0, #4db6ac 100%);
        }

        .bg-gradient-blue {
            background: linear-gradient(to right, #1976d2 0, #64b5f6 100%);
        }

        .bg-gradient-danger {
            background: linear-gradient(to right, #f95058 0, #f33540 100%);
        }

        .bg-gradient-purple {
            background: linear-gradient(to right, #8a56e6 0, #6f3cca 100%);
        }


        @-moz-keyframes pulse {
            0% {
                -moz-transform: scale(0);
                opacity: 0.0;
            }

            25% {
                -moz-transform: scale(0);
                opacity: 0.1;
            }

            50% {
                -moz-transform: scale(0.1);
                opacity: 0.3;
            }

            75% {
                -moz-transform: scale(0.5);
                opacity: 0.5;
            }

            100% {
                -moz-transform: scale(1);
                opacity: 0.0;
            }
        }

        @-webkit-keyframes pulse {
            0% {
                -webkit-transform: scale(0);
                opacity: 0.0;
            }

            25% {
                -webkit-transform: scale(0);
                opacity: 0.1;
            }

            50% {
                -webkit-transform: scale(0.1);
                opacity: 0.3;
            }

            75% {
                -webkit-transform: scale(0.5);
                opacity: 0.5;
            }

            100% {
                -webkit-transform: scale(1);
                opacity: 0.0;
            }
        }

        @-webkit-keyframes taskHighlighter {
            0% {
                background: #FEEB99;
            }

            100% {
                background: #fff;
            }
        }

        @keyframes taskHighlighter {
            0% {
                background: #FEEB99;
            }

            100% {
                background: #fff;
            }
        }


        .check {
            display: block;
            margin: 0;
            padding: 0;
            width: 0;
            height: 0;
            visibility: hidden;
            opacity: 0;
            pointer-events: none;
            position: absolute;
        }

        .checktoggle {
            background-color: #e0001a;
            border-radius: 12px;
            cursor: pointer;
            display: block;
            font-size: 0;
            height: 24px;
            margin-bottom: 0;
            position: relative;
            width: 48px;
        }

        .checktoggle:after {
            content: ' ';
            display: block;
            position: absolute;
            top: 50%;
            left: 0;
            transform: translate(5px, -50%);
            width: 16px;
            height: 16px;
            background-color: #fff;
            border-radius: 50%;
            transition: left 300ms ease, transform 300ms ease;
        }

        .check:checked+.checktoggle {
            background-color: #55ce63;
        }

        .check:checked+.checktoggle:after {
            left: 100%;
            transform: translate(calc(-100% - 5px), -50%);
        }

        .onoffswitch {
            margin-left: auto;
            position: relative;
            width: 73px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
        }

        .onoffswitch-checkbox {
            display: none;
        }

        .onoffswitch-label {
            display: block;
            overflow: hidden;
            cursor: pointer;
            border-radius: 20px;
            margin-bottom: 0;
        }

        .onoffswitch-inner {
            display: block;
            margin-left: -100%;
            transition: margin 0.3s ease-in 0s;
            width: 200%;
        }

        .onoffswitch-inner:before,
        .onoffswitch-inner:after {
            box-sizing: border-box;
            color: #fff;
            display: block;
            float: left;
            font-size: 16px;
            height: 30px;
            line-height: 32px;
            padding: 0;
            width: 50%;
        }

        .onoffswitch-inner:before {
            background-color: #55ce63;
            color: #fff;
            content: "ON";
            padding-left: 14px;
        }

        .onoffswitch-inner:after {
            content: "OFF";
            padding-right: 14px;
            background-color: #ccc;
            color: #fff;
            text-align: right;
        }

        .onoffswitch-switch {
            background: #fff;
            border-radius: 20px;
            bottom: 0;
            display: block;
            height: 20px;
            margin: 5px;
            position: absolute;
            right: 43px;
            top: 0;
            transition: all 0.3s ease-in 0s;
            width: 20px;
        }

        .onoffswitch-checkbox:checked+.onoffswitch-label .onoffswitch-inner {
            margin-left: 0;
        }

        .onoffswitch-checkbox:checked+.onoffswitch-label .onoffswitch-switch {
            right: 0px;
        }

        .switch {
            cursor: pointer;
            position: relative;
        }

        .switch input {
            position: absolute;
            opacity: 0;
            filter: alpha(opacity=0);
        }

        .switch input:checked+span {
            background-color: #55ce63;
        }

        .switch input:checked+span:after {
            left: 31px;
        }

        .switch span {
            position: relative;
            width: 60px;
            height: 30px;
            border-radius: 30px;
            background-color: #fff;
            border: 1px solid #eee;
            border-color: rgba(0, 0, 0, 0.1);
            display: inline-block;
            -webkit-transition: background-color 0.2s;
            transition: background-color 0.2s;
        }

        .switch span:after {
            content: "";
            position: absolute;
            background-color: #fff;
            width: 26px;
            top: 1px;
            bottom: 1px;
            border-radius: 30px;
            -webkit-box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.25);
            box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.25);
            -webkit-transition: left 0.2s;
            transition: left 0.2s;
        }

        .rating-list {
            display: flex;
            justify-content: center
        }

        .rating-list>span {
            display: inline-block;
            margin-right: 4px;
        }

        .rating-list span a {
            background-color: #ccc;
            border-radius: 4px;
            color: #333;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 50px;
            height: 50px;
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .rating-list span.rating-bad a {
            background-color: #ad0d20;
            color: #fff;
        }

        .rating-list span.rating-normal a {
            background-color: #dccc00;
            color: #fff;
        }

        .rating-list span.rating-good a {
            background-color: #00a100;
            color: #fff;
        }

        .rating-text {
            font-size: 12px;
            max-width: 157px;
            display: inline-block;
            margin-top: 5px;
        }

        .rating-list>span.rating-normal {
            text-align: center;
        }

        .rating-list>span.rating-good {
            text-align: right;
        }

        .custom_check {
            color: #555;
            display: inline-block;
            position: relative;
            font-size: 14px;
            font-size: .9375rem;
            padding-left: 30px;
            margin-bottom: 10px;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        .custom_check input {
            position: absolute;
            opacity: 0;
            cursor: pointer
        }

        .custom_check input:checked~.checkmark {
            background-color: #ff9b44;
            border: 1px solid transparent
        }

        .custom_check .checkmark {
            position: absolute;
            top: 0;
            left: 0;
            height: 20px;
            width: 20px;
            border: 1px solid #d2d8dd;
            background-color: #fff;
            border-radius: 3px;
            -moz-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            -webkit-transition: all 0.3s ease-in-out;
            -ms-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out
        }

        .custom_check .checkmark:after {
            content: "";
            position: absolute;
            display: none;
            left: 7px;
            top: 3px;
            width: 5px;
            height: 10px;
            border: solid white;
            border-width: 0 2px 2px 0;
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg)
        }

        .custom_check input:checked~.checkmark:after {
            display: block
        }

        .custom_radio {
            color: #555;
            display: inline-block;
            position: relative;
            font-size: 14px;
            font-size: 0.9375rem;
            padding-left: 30px;
            margin-bottom: 10px;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        .radio_input .custom_radio+.custom_radio {
            margin-left: 15px;
        }

        .custom_radio input {
            position: absolute;
            opacity: 0
        }

        .custom_radio input:checked~.checkmark:after {
            opacity: 1
        }

        .custom_radio .checkmark {
            position: absolute;
            top: 0;
            left: 0;
            height: 20px;
            width: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 50%
        }

        .custom_radio .checkmark:after {
            display: block;
            content: "";
            position: absolute;
            opacity: 0;
            top: 3px;
            left: 3px;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: #ff9b44;
            -moz-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            -webkit-transition: all 0.3s ease-in-out;
            -ms-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out
        }

        .setting-performance-table.table>tbody>tr>td,
        .setting-performance-table.table>tbody>tr>th,
        .setting-performance-table.table>tfoot>tr>td,
        .setting-performance-table.table>tfoot>tr>th,
        .setting-performance-table.table>thead>tr>td,
        .setting-performance-table.table>thead>tr>th {
            vertical-align: middle;
        }

        .setting-performance-table textarea.form-control {
            resize: none;
            height: 44px !important;
            padding-top: 10px !important;
        }


        .modal {
            -webkit-overflow-scrolling: touch;
        }

        .modal-footer.text-center {
            justify-content: center;
        }

        .modal-footer.text-left {
            justify-content: flex-start;
        }

        .modal-dialog.modal-md {
            max-width: 600px;
        }

        .custom-modal .modal-content {
            border: 0;
            border-radius: 10px;
        }

        .custom-modal .modal-footer {
            border: 0;
        }

        .custom-modal .modal-header {
            border: 0;
            justify-content: center;
            padding: 30px 30px 0;
        }

        .custom-modal .modal-footer {
            border: 0;
            justify-content: center;
            padding: 0 30px 30px;
        }

        .custom-modal .modal-body {
            padding: 30px;
        }

        .custom-modal .close {
            background-color: #a0a0a0;
            border-radius: 50%;
            color: #fff;
            font-size: 13px;
            height: 20px;
            line-height: 20px;
            margin: 0;
            opacity: 1;
            padding: 0;
            position: absolute;
            right: 10px;
            top: 10px;
            width: 20px;
            z-index: 99;
        }

        .custom-modal .modal-title {
            font-size: 22px;
        }

        .modal-backdrop.show {
            opacity: 0.4;
            -webkit-transition-duration: 400ms;
            transition-duration: 400ms;
        }

        .modal .card {
            box-shadow: unset;
        }



        .header {

            background-color: #00796b;
            border-bottom: 1px solid transparent;
            box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.2);
            height: 60px;
            left: 0;
            position: fixed;
            right: 0;
            top: 0;
            z-index: 1002;
        }

        .header .header-left {
            float: left;
            height: 60px;
            padding: 0 20px;
            position: relative;
            text-align: center;
            width: 230px;
            z-index: 1;
            transition: all 0.2s ease-in-out;
        }

        .header .header-left .logo {
            display: inline-block;
            line-height: 60px;
        }

        .bar-icon {
            display: inline-block;
            width: 21px;
        }

        .bar-icon span {
            background-color: #fff;
            border-radius: 500px;
            display: block;
            float: left;
            height: 2px;
            margin-bottom: 5px;
            width: 21px;
        }

        .bar-icon span:nth-child(2) {
            width: 15px;
        }

        .bar-icon span:nth-child(3) {
            margin-bottom: 0;
        }

        .header .navbar-nav .badge {
            position: absolute;
            right: 7px;
            top: 4px;
        }

        .header .dropdown-menu>li>a {
            position: relative;
        }

        .header .dropdown-toggle::after {
            display: none;
        }

        .header .has-arrow .dropdown-toggle:after {
            border-top: 0;
            border-left: 0;
            border-bottom: 2px solid #fff;
            border-right: 2px solid #fff;
            content: '';
            height: 8px;
            display: inline-block;
            pointer-events: none;
            -webkit-transform-origin: 66% 66%;
            -ms-transform-origin: 66% 66%;
            transform-origin: 66% 66%;
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg);
            -webkit-transition: all 0.15s ease-in-out;
            transition: all 0.15s ease-in-out;
            width: 8px;
            vertical-align: 2px;
        }

        .header .has-arrow .dropdown-toggle[aria-expanded="true"]:after {
            -webkit-transform: rotate(-135deg);
            -ms-transform: rotate(-135deg);
            transform: rotate(-135deg);
        }

        .page-title-box {
            border-radius: 0;
            float: left;
            height: 60px;
            margin-bottom: 0;
            padding: 17px 20px;
        }

        .page-title-box h3 {
            color: #fff;
            font-size: 20px;
            font-weight: normal;
            margin: 0;
        }

        .user-menu {
            float: right;
            margin: 0;
            position: relative;
            z-index: 99;
        }

        .user-menu.nav>li>a {
            color: #fff;
            font-size: 15px;
            line-height: 60px;
            padding: 0 15px;
            height: 60px;
        }

        .user-menu.nav>li>a:hover,
        .user-menu.nav>li>a:focus {
            background-color: rgba(0, 0, 0, 0.2);
        }

        .flag-nav img {
            margin-right: 5px;
        }

        .flag-nav .dropdown-menu {
            max-height: 150px;
            min-width: 120px;
            overflow-y: auto;
        }

        .flag-nav .dropdown-menu .dropdown-item {
            padding: 5px 15px;
        }

        .user-img {
            display: inline-block;
            position: relative;
        }

        .main-drop .user-img img {
            border-radius: 50%;
            width: 30px;
        }

        .user-img .status {
            border: 2px solid #fff;
            bottom: 0;
            height: 10px;
            margin: 0;
            position: absolute;
            right: 0;
            width: 10px;
        }

        .user-menu .user-img .status {
            bottom: 12px;
        }

        .status {
            background-color: #263238;
            border-radius: 50%;
            display: inline-block;
            height: 10px;
            width: 10px;
        }

        .status.online {
            background-color: #55ce63;
        }

        .status.offline {
            background-color: #f62d51;
        }

        .status.away {
            background-color: #faa937;
        }

        .main-drop .dropdown-menu {
            min-width: 130px;
            padding: 0;
        }



        .sidebar {
            background-color: #34444c;
            border-right: 1px solid transparent;
            bottom: 0;
            left: 0;
            margin-top: 0;
            position: fixed;
            top: 60px;
            transition: all 0.2s ease-in-out 0s;
            width: 230px;
            z-index: 1001;
        }

        .sidebar.opened {
            -webkit-transition: all 0.4s ease;
            -moz-transition: all 0.4s ease;
            transition: all 0.4s ease;
        }

        .sidebar-inner {
            height: 100%;
            transition: all 0.2s ease-in-out 0s;
        }

        .sidebar-menu {
            padding: 10px 0;
        }

        .sidebar-menu ul {
            font-size: 15px;
            list-style-type: none;
            margin: 0;
            padding: 0;
            position: relative;
        }

        .sidebar-menu li a {
            color: #b7c0cd;
            display: block;
            font-size: 15px;
            height: auto;
            padding: 0 20px;
        }

        .sidebar-menu li a:hover {
            color: #fff;
        }

        .sidebar-menu li.active a {
            color: #fff;
            background-color: rgba(0, 0, 0, 0.2);
        }

        .menu-title {
            color: #ebecf1;
            display: flex;
            font-size: 14px;
            opacity: 1;
            padding: 5px 15px;
            white-space: nowrap;
        }

        .menu-title>i {
            float: right;
            line-height: 40px;
        }

        .sidebar-menu li.menu-title a {
            color: #f43b48;
            display: inline-block;
            margin-left: auto;
            padding: 0;
        }

        .sidebar-menu li.menu-title a.btn {
            color: #fff;
            display: block;
            float: none;
            font-size: 15px;
            margin-bottom: 15px;
            padding: 10px 15px;
        }

        .sidebar-menu ul ul a.active {
            color: #f43b48;
            text-decoration: underline;
        }

        .mobile-user-menu {
            color: #fff;
            display: none;
            float: right;
            font-size: 24px;
            height: 60px;
            line-height: 60px;
            padding: 0 20px;
            position: absolute;
            right: 0;
            text-align: right;
            top: 0;
            width: 60px;
            z-index: 10;
        }

        .mobile-user-menu>a {
            color: #fff;
            padding: 0;
        }

        .mobile-user-menu a:hover {
            color: #fff;
        }

        .mobile-user-menu>.dropdown-menu {
            min-width: 130px;
        }

        .mobile-user-menu>.dropdown-menu>a {
            line-height: 23px;
        }

        .profile-rightbar {
            display: none !important;
            color: #f43b48;
            font-size: 26px;
            margin-left: 15px;
        }

        .mobile_btn {
            display: none;
            float: left;
        }

        .sidebar .sidebar-menu>ul>li>a span {
            transition: all 0.2s ease-in-out 0s;
            display: inline-block;
            margin-left: 15px;
            white-space: nowrap;
        }

        .sidebar .sidebar-menu>ul>li>a span.chat-user {
            margin-left: 0;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .sidebar .sidebar-menu>ul>li>a span.badge {
            margin-left: auto;
        }

        .sidebar-menu ul ul a {
            display: block;
            font-size: 14px;
            padding: 9px 10px 9px 50px;
            position: relative;
        }

        .sidebar-menu ul ul {
            display: none;
        }

        .sidebar-menu ul ul ul a {
            padding-left: 70px;
        }

        .sidebar-menu ul ul ul ul a {
            padding-left: 90px;
        }

        .sidebar-menu>ul>li {
            position: relative;
        }

        .sidebar-menu .menu-arrow {
            -webkit-transition: -webkit-transform 0.15s;
            -o-transition: -o-transform 0.15s;
            transition: transform .15s;
            position: absolute;
            right: 15px;
            display: inline-block;
            font-family: 'FontAwesome';
            text-rendering: auto;
            line-height: 40px;
            font-size: 18px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            -webkit-transform: translate(0, 0);
            -ms-transform: translate(0, 0);
            -o-transform: translate(0, 0);
            transform: translate(0, 0);
            line-height: 18px;
            top: 11px;
        }

        .sidebar-menu .menu-arrow:before {
            content: "\f105";
        }

        .sidebar-menu li a.subdrop .menu-arrow {
            -ms-transform: rotate(90deg);
            -webkit-transform: rotate(90deg);
            -o-transform: rotate(90deg);
            transform: rotate(90deg);
        }

        .noti-dot:before {
            content: '';
            width: 5px;
            height: 5px;
            border: 5px solid #f43b48;
            -webkit-border-radius: 30px;
            -moz-border-radius: 30px;
            border-radius: 30px;
            background-color: #f43b48;
            z-index: 10;
            position: absolute;
            right: 37px;
            top: 15px;
        }

        .noti-dot:after {
            content: '';
            border: 4px solid #f43b48;
            background: transparent;
            -webkit-border-radius: 60px;
            -moz-border-radius: 60px;
            border-radius: 60px;
            height: 24px;
            width: 24px;
            -webkit-animation: pulse 3s ease-out;
            -moz-animation: pulse 3s ease-out;
            animation: pulse 3s ease-out;
            -webkit-animation-iteration-count: infinite;
            -moz-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
            position: absolute;
            top: 8px;
            right: 30px;
            z-index: 1;
            opacity: 0;
        }

        .sidebar-menu ul ul a .menu-arrow {
            top: 6px;
        }

        .sidebar-menu a {
            line-height: 1.3;
            transition: unset;
            -moz-transition: unset;
            -o-transition: unset;
            -ms-transition: unset;
            -webkit-transition: unset;
        }

        .sidebar-menu>ul>li>a {
            padding: 8px 15px;
            align-items: center;
            display: flex;
            justify-content: flex-start;
            position: relative;
            transition: all 0.2s ease-in-out 0s;
        }

        .sidebar-menu ul li a i {
            display: inline-block;
            font-size: 24px;
            line-height: 24px;
            text-align: left;
            vertical-align: middle;
            width: 20px;
            transition: all 0.2s ease-in-out 0s;
        }

        .sidebar-menu ul li.menu-title a i {
            font-size: 16px !important;
            margin-right: 0;
            text-align: right;
            width: auto;
        }

        .sidebar-menu li a>.badge {
            color: #fff;
        }



        .page-wrapper {
            left: 0;
            margin-left: 230px;
            padding-top: 60px;
            position: relative;
            transition: all 0.2s ease-in-out;
        }

        .page-wrapper>.content {
            padding: 30px;
        }

        .page-header {
            margin-bottom: 1.875rem;
        }

        .page-header .breadcrumb {
            background-color: transparent;
            color: #6c757d;
            font-size: 1rem;
            font-weight: 500;
            margin-bottom: 0;
            padding: 0;
        }

        .page-header .breadcrumb a {
            color: #333;
        }

        .card {
            border: 1px solid #ededed;
            box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.2);
            margin-bottom: 30px;
        }

        .card-title {
            color: #1f1f1f;
            font-size: 20px;
            font-weight: 500;
            margin-bottom: 20px;
        }

        .card-header {
            background-color: #fff;
        }

        .card-footer {
            background-color: #fff;
        }

        .page-title {
            color: #1f1f1f;
            font-size: 26px;
            font-weight: 500;
            margin-bottom: 5px;
        }

        .page-sub-title {
            color: #565656;
            font-size: 18px;
            font-weight: normal;
            margin-bottom: 20px;
        }

        .add-btn {
            background-color: #f43b48;
            border: 1px solid #f43b48;
            border-radius: 50px;
            color: #fff;
            float: right;
            font-weight: 500;
            min-width: 140px;
        }

        .add-btn:hover,
        .add-btn:focus,
        .add-btn:active {
            background-color: #f10e1d;
            border: 1px solid #f10e1d;
            color: #fff;
        }

        .add-btn i {
            margin-right: 5px;
        }

        .cal-icon {
            position: relative;
            width: 100%;
        }

        .cal-icon:after {
            color: #979797;
            content: "\f073";
            display: block;
            font-family: "FontAwesome";
            font-size: 15px;
            margin: auto;
            position: absolute;
            right: 15px;
            top: 10px;
        }

        .form-focus .cal-icon:after {
            top: 15px;
        }



        .account-page {
            align-items: center;
            display: flex;
        }

        .account-page .main-wrapper {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            width: 100%;
        }

        .account-content {
            padding: 20px 0;
        }

        .account-title {
            font-size: 26px;
            font-weight: 500;
            margin-bottom: 5px;
            text-align: center;
        }

        .account-subtitle {
            color: #4c4c4c;
            font-size: 18px;
            margin-bottom: 30px;
            text-align: center;
        }

        .account-box {
            background-color: #fff;
            border: 1px solid #ededed;
            border-radius: 4px;
            box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.2);
            margin: 0 auto;
            overflow: hidden;
            width: 480px;
        }

        .account-wrapper {
            padding: 30px;
        }

        .account-logo {
            margin-bottom: 30px;
            text-align: center;
        }

        .account-box .form-group {
            margin-bottom: 25px;
        }

        .account-box .account-btn {
            background-color: rgb(59 80 244 / 57%);
            border: 0;
            border-radius: 14px;
            display: block;
            font-size: 22px;
            padding: 10px 26px;
            width: 100%;
        }

        .account-box .account-btn:hover,
        .account-box .account-btn:focus {
            border: 0;
            opacity: 0.8;
        }

        .account-box .form-control {
            background-color: #fbfbfb;
            border: 1px solid #e3e3e3;
            border-radius: 4px;
            height: 46px;
        }

        .account-box label {
            color: #1f1f1f;
            font-size: 16px;
            font-weight: normal;
            margin-bottom: 5px;
        }

        .account-logo img {
            width: 100px;
        }

        .account-footer {
            text-align: center;
        }

        .account-footer p {
            margin-bottom: 0;
        }

        .account-footer a {
            color: #1E40AF;
        }

        .account-footer a:hover {
            color: #f43b48;
        }



        .card-table .card-header {
            background-color: #fff;
            border-bottom: 1px solid #ddd;
            padding: 15px;
        }

        .card-table .card-body {
            padding: 0;
        }

        .card-table .card-footer {
            background-color: #fff;
            text-align: center;
        }

        .card-table .card-footer a {
            color: #333;
        }

        .card-title>a.btn {
            color: #fff;
        }

        .custom-table tr {
            background-color: #fff;
            box-shadow: 0 0 3px #e5e5e5;
        }

        .table.custom-table>tbody>tr>td,
        .table.custom-table>tbody>tr>th,
        .table.custom-table>tfoot>tr>td,
        .table.custom-table>tfoot>tr>th,
        .table.custom-table>thead>tr>td,
        .table.custom-table>thead>tr>th {
            padding: 10px 8px;
            vertical-align: middle;
        }

        .table.custom-table>tbody>tr>td:first-child,
        .table.custom-table>thead>tr>th:first-child {
            padding-left: 15px;
        }

        .table.custom-table>tbody>tr>td:last-child,
        .table.custom-table>thead>tr>th:last-child {
            padding-right: 15px;
        }

        .dash-widget-icon {
            background-color: rgba(244, 59, 72, 0.2);
            border-radius: 100%;
            color: rebeccapurple;
            display: inline-block;
            float: left;
            font-size: 30px;
            height: 60px;
            line-height: 60px;
            margin-right: 10px;
            text-align: center;
            width: 60px;
        }

        .dash-widget-info {
            text-align: right;
        }

        .dash-widget-info>h3 {
            font-size: 30px;
            font-weight: 600;
        }

        .dash-widget-info>span {
            font-size: 16px;
        }

        .dash-statistics .stats-info {
            margin-bottom: 5px;
        }

        .dash-statistics .stats-info:last-child {
            margin-bottom: 0;
        }

        .dash-statistics .progress {
            height: 4px;
        }

        .dash-statistics .stats-list {
            height: auto;
        }

        .leave-info-box {
            border: 1px solid #e5e5e5;
            padding: 15px;
            margin-bottom: 15px;
        }

        .leave-info-box:last-child {
            margin-bottom: 0;
        }

        .load-more a {
            background-color: #fff;
            border: 1px solid #eaeaea;
            border-radius: 3px;
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            display: inline-block;
            font-size: 14px;
            padding: 5px 15px;
        }



        .activity-box {
            position: relative;
        }

        .activity-list {
            list-style: none;
            margin: 0 0 0 10px;
            padding: 0;
            position: relative;
        }

        .activity .activity-list {
            list-style: none;
            margin: 0;
            padding: 0;
            position: relative;
        }

        .activity .activity-list>li .activity-user {
            height: 32px;
            margin: 0;
            padding: 0;
            position: absolute;
            top: 12px;
            left: 8px;
            width: 32px;
        }

        .activity .activity-list>li .activity-content {
            background-color: #fff;
            margin: 0 0 0 40px;
            padding: 0;
            position: relative;
        }

        .activity-list::before {
            background: #ddd;
            bottom: 0;
            content: "";
            left: 23px;
            position: absolute;
            top: 8px;
            width: 2px;
        }

        .activity .activity-list li::before {
            background: #ddd;
            bottom: 0;
            content: "";
            left: 22px;
            position: absolute;
            top: 12px;
            width: 2px;
        }

        .activity-list li::before {
            background: #eee;
            bottom: 0;
            content: "";
            left: 8px;
            position: absolute;
            top: 8px;
            width: 2px;
        }

        .activity-list>li {
            background-color: #fff;
            margin-bottom: 10px;
            padding: 10px;
            position: relative;
            border: 1px solid #ededed;
            box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.2);
        }

        .activity-list>li:last-child .activity-content {
            margin-bottom: 0;
        }

        .activity-user .avatar {
            height: 32px;
            line-height: 32px;
            margin: 0;
            width: 32px;
        }

        .activity-list>li .activity-user {
            background: #fff;
            height: 32px;
            left: -7px;
            margin: 0;
            padding: 0;
            position: absolute;
            top: 3px;
            width: 32px;
        }

        .activity-list>li .activity-content {
            background-color: #fff;
            margin: 0 0 20px 40px;
            padding: 0;
            position: relative;
        }

        .activity-list>li .activity-content .timeline-content {
            color: #9e9e9e;
        }

        .activity-list>li .activity-content .timeline-content a {
            color: #616161;
        }

        .activity-list>li .time {
            color: #bdbdbd;
            display: block;
            font-size: 13px;
        }


        .select2-container .select2-selection--single {
            border: 1px solid #e3e3e3;
            border-radius: 0.25rem;
            height: 44px;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow {
            height: 42px;
            right: 7px;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow b {
            border-color: #ccc transparent transparent;
            border-style: solid;
            border-width: 6px 6px 0;
            height: 0;
            left: 50%;
            margin-left: -10px;
            margin-top: -2px;
            position: absolute;
            top: 50%;
            width: 0;
        }

        .select2-container--default.select2-container--open .select2-selection--single .select2-selection__arrow b {
            border-color: transparent transparent #ccc;
            border-width: 0 6px 6px;
        }

        .select2-container .select2-selection--single .select2-selection__rendered {
            padding-right: 30px;
            padding-left: 15px;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            color: #676767;
            font-size: 15px;
            font-weight: normal;
            line-height: 42px;
        }

        .select2-container--default .select2-results__option--highlighted[aria-selected] {
            background-color: #3baaf4;
        }


        .nav-tabs .nav-link {
            border-radius: 0;
        }

        .nav-tabs>li>a {
            margin-right: 0;
            color: #888;
            border-radius: 0;
        }

        .nav-tabs .nav-link:focus,
        .nav-tabs .nav-link:hover {
            background-color: #eee;
            border-color: transparent;
            color: #333;
        }

        .nav-tabs.nav-justified>li>a {
            border-radius: 0;
            margin-bottom: 0;
        }

        .nav-tabs.nav-justified>li>a:hover,
        .nav-tabs.nav-justified>li>a:focus {
            border-bottom-color: #ddd;
        }

        .nav-tabs.nav-justified.nav-tabs-solid>li>a {
            border-color: transparent;
        }

        .nav-tabs.nav-tabs-solid>li>a {
            color: #333;
        }

        .nav-tabs.nav-tabs-solid>li>a.active,
        .nav-tabs.nav-tabs-solid>li>a.active:hover,
        .nav-tabs.nav-tabs-solid>li>a.active:focus {
            background-color: #f43b48;
            border-color: #f43b48;
            color: #fff;
        }

        .nav-tabs.nav-tabs-solid.nav-tabs-rounded {
            border-radius: 50px;
        }

        .nav-tabs.nav-tabs-solid.nav-tabs-rounded>li>a {
            border-radius: 50px;
        }

        .nav-tabs.nav-tabs-solid.nav-tabs-rounded>li>a.active,
        .nav-tabs.nav-tabs-solid.nav-tabs-rounded>li>a.active:hover,
        .nav-tabs.nav-tabs-solid.nav-tabs-rounded>li>a.active:focus {
            border-radius: 50px;
        }

        .nav-tabs-justified>li>a {
            border-radius: 0;
            margin-bottom: 0;
        }

        .nav-tabs-justified>li>a:hover,
        .nav-tabs-justified>li>a:focus {
            border-bottom-color: #ddd;
        }

        .nav-tabs-justified.nav-tabs-solid>li>a {
            border-color: transparent;
        }

        .tab-content {
            padding-top: 20px;
        }



        .custom-table tr.holiday-completed {
            color: #aaa;
        }

        .dropdown.action-label {
            display: inline-block;
        }

        .action-label>a {
            display: inline-block;
            min-width: 103px;
        }

        .action-label .btn-sm {
            padding: 4px;
        }

        .form-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .form-header h3 {
            color: #333;
            font-size: 22px;
            font-weight: 500;
            margin-bottom: 10px;
        }

        .form-header p {
            color: #929292;
            font-size: 15px;
            margin-bottom: 0;
        }

        .modal-btn>.row {
            margin-left: -8px;
            margin-right: -8px;
        }

        .modal-btn>.row>div {
            padding-left: 8px;
            padding-right: 8px;
        }

        .continue-btn {
            background-color: #fff;
            border: 1px solid #f43b48;
            border-radius: 50px;
            color: #f43b48;
            display: block;
            font-size: 18px;
            font-weight: 600;
            padding: 10px 20px;
            text-align: center;
        }

        .continue-btn:hover,
        .continue-btn:focus,
        .continue-btn:active {
            background-color: #f43b48;
            border: 1px solid #f43b48;
            color: #fff;
        }

        .cancel-btn {
            background-color: #fff;
            border: 1px solid #f43b48;
            border-radius: 50px;
            color: #f43b48;
            display: block;
            font-size: 18px;
            font-weight: 600;
            padding: 10px 20px;
            text-align: center;
        }

        .cancel-btn:hover,
        .cancel-btn:focus,
        .cancel-btn:active {
            background-color: #f43b48;
            border: 1px solid #f43b48;
            color: #fff;
        }



        .profile-img-wrap {
            height: 120px;
            position: absolute;
            width: 120px;
            background: #fff;
            overflow: hidden;
        }

        .profile-basic {
            margin-left: 140px;
        }

        .profile-basic .cal-icon {
            width: 100%;
        }

        .profile-img-wrap img {
            border-radius: 50%;
            height: 120px;
            width: 120px;
        }

        .fileupload.btn {
            position: absolute;
            right: 0;
            bottom: 0;
            background: rgba(33, 33, 33, 0.5);
            border-radius: 0;
            padding: 3px 10px;
            border: none;
        }

        .fileupload input.upload {
            cursor: pointer;
            filter: alpha(opacity=0);
            font-size: 20px;
            margin: 0;
            opacity: 0;
            padding: 0;
            position: absolute;
            right: -3px;
            top: -3px;
            padding: 5px;
        }

        .btn-text {
            color: #fff;
        }

        .submit-section {
            text-align: center;
            margin-top: 40px;
        }

        .submit-btn {
            border-radius: 50px;
            font-size: 18px;
            font-weight: 600;
            min-width: 200px;
            padding: 10px 20px;
        }

        .form-scroll {
            max-height: 400px;
            overflow-y: auto;
        }

        .profile-img-wrap.edit-img {
            border-radius: 50%;
            margin: 0 auto 30px;
            position: relative;
        }

        .profile-img-wrap.edit-img .fileupload.btn {
            left: 0;
        }


        .chat-avatar-sm {
            display: inline-block;
            float: left;
            margin-left: 0 !important;
            margin-right: 10px;
            position: relative;
            width: 24px;
        }

        .chat-avatar-sm img {
            width: 24px;
        }

        .chat-avatar-sm.user-img .status {
            bottom: 0;
            right: -3px;
        }

        .chat-main-row {
            bottom: 0;
            left: 0;
            overflow: auto;
            padding-bottom: inherit;
            padding-top: inherit;
            position: absolute;
            right: 0;
            top: 0;
        }

        .chat-main-wrapper {
            display: table;
            height: 100%;
            table-layout: fixed;
            width: 100%;
        }

        .message-view {
            display: table-cell;
            height: 100%;
            float: none;
            padding: 0;
            position: static;
            vertical-align: top;
            width: 75%;
        }

        .chat-window {
            display: table;
            height: 100%;
            table-layout: fixed;
            width: 100%;
            background-color: #f7f7f7;
        }

        .fixed-header {
            background-color: #fff;
            border-bottom: 1px solid #eaeaea;
            padding: 10px 15px;
        }

        .fixed-header .navbar {
            border: 0 none;
            margin: 0;
            min-height: auto;
            padding: 0;
        }

        .fixed-header .user-info a {
            color: #555;
            text-transform: uppercase;
        }

        .typing-text {
            color: #f43b48;
            font-size: 12px;
            text-transform: lowercase;
        }

        .last-seen {
            color: #888;
            display: block;
            font-size: 12px;
        }

        .custom-menu {
            margin-top: 6px;
        }

        .fixed-header .custom-menu {
            margin: 0 0 1px;
        }

        .custom-menu.nav>li>a {
            color: #bbb;
            font-size: 26px;
            line-height: 32px;
            margin-left: 15px;
            padding: 0;
        }

        .custom-menu.navbar-nav>li>a:hover,
        .custom-menu.navbar-nav>li>a:focus {
            background-color: transparent;
        }

        .custom-menu .dropdown-menu {
            left: auto;
            right: 0;
        }

        .search-box {
            margin-top: 5px;
        }

        .search-box .input-group {
            background-color: #f7f7f7;
            border: 1px solid #e3e3e3;
            border-radius: 50px;
        }

        .search-box .input-group .form-control {
            background: transparent;
            border: none;
        }

        .search-box .btn {
            background-color: transparent;
        }

        .search-input {
            border-radius: 5px;
        }

        .chat-contents {
            display: table-row;
            height: 100%;
        }

        .chat-content-wrap {
            height: 100%;
            position: relative;
            width: 100%;
        }

        .chat-wrap-inner {
            bottom: 0;
            left: 0;
            overflow: auto;
            position: absolute;
            right: 0;
            top: 0;
        }

        .chats {
            padding: 30px 15px;
        }

        .chat-body {
            display: block;
            margin: 10px 0 0;
            overflow: hidden;
        }

        .chat-body:first-child {
            margin-top: 0
        }

        .chat-right .chat-content {
            background-color: #f2f2f2;
            border: 1px solid #e3e3e3;
            border-radius: 20px 2px 2px 20px;
            clear: both;
            color: #727272;
            display: block;
            float: right;
            margin: 0;
            max-width: 60%;
            padding: 8px 15px;
            position: relative;
        }

        .chat-right .chat-body {
            padding-left: 48px;
            padding-right: 10px;
        }

        .chat-bubble {
            display: block;
            width: 100%;
            float: left;
            margin-bottom: 10px;
        }

        .chat-bubble:hover .chat-action-btns {
            display: block;
            float: left;
        }

        .chat-right .chat-bubble:hover .chat-action-btns {
            float: right;
            display: block;
        }

        .chat.chat-right .chat-bubble:last-child .chat-content {
            border-bottom-right-radius: 20px;
        }

        .chat.chat-right .chat-bubble:first-child .chat-content {
            border-top-right-radius: 20px;
        }

        .chat-content>p {
            margin-bottom: 0;
        }

        .chat-time {
            color: rgba(0, 0, 0, 0.5);
            display: block;
            font-size: 12px;
        }

        .chat-right .chat-time {
            text-align: right;
        }

        .chat-bubble .chat-action-btns {
            display: none;
        }

        .chat-action-btns {
            float: right;
        }

        .chat-action-btns ul {
            list-style: none;
            padding: 0;
            margin: 15px 15px 0 15px;
        }

        .chat-action-btns ul>li {
            display: inline-block;
            margin-left: 5px;
            font-size: 18px;
        }

        .chat-right .chat-action-btns {
            float: left;
        }

        .chat-bubble .chat-action-btns a {
            color: #8c8c8c;
        }

        .chat-line {
            border-bottom: 1px solid #eaeaea;
            height: 12px;
            margin: 7px 0 20px;
            position: relative;
            text-align: center;
        }

        .chat-date {
            background-color: #f7f7f7;
            color: #727272;
            font-size: 12px;
            padding: 0 11px;
        }

        .chat-avatar {
            float: right;
        }

        .chat-avatar .avatar {
            line-height: 30px;
            height: 30px;
            width: 30px;
        }

        .chat-left .chat-avatar {
            float: left
        }

        .chat-left .chat-body {
            margin-right: 0;
            margin-left: 30px;
            padding-right: 20px;
        }

        .chat-left .chat-content {
            background-color: #fff;
            border: 1px solid #eaeaea;
            color: #888;
            float: left;
            position: relative;
            padding: 8px 15px;
            border-radius: 2px 20px 20px 2px;
            max-width: 60%;
        }

        .avatar {
            background-color: #aaa;
            border-radius: 50%;
            color: #fff;
            display: inline-block;
            font-weight: 500;
            height: 38px;
            line-height: 38px;
            margin: 0 10px 0 0;
            text-align: center;
            text-decoration: none;
            text-transform: uppercase;
            vertical-align: middle;
            width: 38px;
            position: relative;
            white-space: nowrap;
        }

        .avatar:hover {
            color: #fff;
        }

        .avatar.avatar-xs {
            width: 24px;
            height: 24px
        }

        .avatar>img {
            border-radius: 50%;
            display: block;
            overflow: hidden;
            width: 100%;
        }

        .chat.chat-left .chat-bubble:first-child .chat-content {
            border-top-left-radius: 20px;
            margin-top: 0;
        }

        .chat.chat-left .chat-bubble:last-child .chat-content {
            border-bottom-left-radius: 20px;
        }

        .chat-left .chat-time {
            color: #a9a9a9
        }

        .attach-list {
            color: #a3a3a3;
            padding: 5px 0 0;
            line-height: 24px;
            margin: 0;
            list-style: none;
        }

        .attach-list i {
            margin-right: 3px;
            font-size: 16px;
        }

        .chat-footer {
            background-color: #fff;
            border-top: 1px solid #eaeaea;
            padding: 15px;
        }

        .message-bar {
            display: table;
            height: 44px;
            position: relative;
            width: 100%;
        }

        .message-bar .message-inner {
            display: table-row;
            height: 100%;
            padding: 0 8px;
            width: 100%;
        }

        .message-bar .link {
            color: #777;
            display: table-cell;
            font-size: 20px;
            padding: 0 10px;
            position: relative;
            vertical-align: middle;
            width: 30px;
        }

        .message-bar .message-area {
            display: table-cell;
        }

        .message-area .input-group .form-control {
            background-color: #fff;
            border: 1px solid #eaeaea;
            box-shadow: none;
            color: #555;
            display: block;
            font-size: 14px;
            height: 44px;
            margin: 0;
            padding: 6px 12px;
            resize: none;
        }

        .message-area .btn {
            height: 44px;
            width: 50px;
        }

        .profile-right {
            display: table-cell;
            height: 100%;
            float: none;
            padding: 0;
            position: static;
            vertical-align: top;
        }

        .display-table {
            display: table;
            table-layout: fixed;
            border-spacing: 0;
            width: 100%;
            height: 100%;
        }

        .table-row {
            display: table-row;
            height: 100%;
        }

        .table-body {
            position: relative;
            height: 100%;
            width: 100%;
        }

        .table-content {
            bottom: 0;
            left: 0;
            overflow: auto;
            position: absolute;
            right: 0;
            top: 0;
        }

        .chat-profile-img {
            padding: 30px;
            position: relative;
            text-align: center;
        }

        .edit-profile-img {
            height: 120px;
            margin: 0 auto;
            position: relative;
            width: 120px;
            cursor: pointer;
        }

        .edit-profile-img img {
            border-radius: 50%;
            height: auto;
            margin: 0;
            width: 120px;
        }

        .change-img {
            background-color: rgba(0, 0, 0, 0.3);
            border-radius: 50%;
            color: #fff;
            display: none;
            height: 100%;
            left: 0;
            line-height: 120px;
            position: absolute;
            top: 0;
            width: 100%;
        }

        .edit-profile-img:hover .change-img {
            display: block;
        }

        .edit-profile-img img {
            height: auto;
            margin: 0;
            width: 120px;
            border-radius: 50%;
        }

        .user-name {
            color: #333;
        }

        .edit-btn {
            border-radius: 40px;
            height: 36px;
            position: absolute;
            right: 15px;
            top: 15px;
            width: 36px;
        }

        .chat-profile-info {
            padding: 15px;
        }

        .user-det-list {
            list-style: none;
            padding: 0;
        }

        .user-det-list>li {
            padding: 6px 15px;
        }

        .user-det-list .text-muted {
            color: #888;
        }

        .transfer-files .tab-content {
            padding-top: 0;
        }

        .files-list {
            list-style: none;
            padding-left: 0;
        }

        .files-list>li {
            border-bottom: 1px solid #eaeaea;
            border-radius: inherit;
            margin: 2px 0 0;
            padding: 10px;
        }

        .files-cont {
            position: relative;
        }

        .file-type {
            height: 48px;
            position: absolute;
            width: 48px;
        }

        .files-icon {
            background-color: #f3f7f9;
            border: 1px solid #e4eaec;
            border-radius: 4px;
            display: inline-block;
            height: 38px;
            line-height: 38px;
            text-align: center;
            width: 38px;
        }

        .files-icon i {
            color: #76838f;
            font-size: 20px;
        }

        .files-info {
            padding: 0 30px 0 50px;
        }

        .file-name a {
            color: #333;
        }

        .files-action {
            display: none;
            height: 30px;
            list-style: none;
            padding-left: 0;
            position: absolute;
            right: 0;
            text-align: right;
            top: 10px;
            width: 30px;
        }

        .files-list>li:hover .files-action {
            display: block;
        }

        .file-date {
            color: #888;
            font-size: 12px;
        }

        .file-author a {
            color: #f43b48;
            font-size: 12px;
            text-decoration: underline;
        }

        .files-action .dropdown-menu {
            left: auto;
            right: 0;
        }

        .files-action>li>a {
            color: #777;
        }

        .chat-img-attach {
            border-radius: 4px;
            margin-bottom: 12px;
            margin-left: 12px;
            position: relative;
            float: right;
        }

        .chat-img-attach img {
            border-radius: 4px;
            display: inline-block;
            height: auto;
            max-width: 100%;
        }

        .chat-placeholder {
            background: rgba(69, 81, 97, 0.6);
            border-radius: 4px;
            color: #fff;
            display: flex;
            flex-direction: column;
            height: 100%;
            justify-content: flex-end;
            left: 0;
            padding: 13px;
            position: absolute;
            top: 0;
            width: 100%;
        }

        .chat-img-name {
            font-size: 12px;
            font-weight: 700;
            line-height: 16px;
        }

        .chat-file-desc {
            font-size: 11px;
        }

        .chat-right .chat-content.img-content {
            background-color: transparent;
            border: 0;
            color: #76838f;
            padding: 0;
            text-align: right;
        }

        .chat-right .img-content .chat-time {
            color: #a3a3a3;
        }

        .chat-left .chat-img-attach {
            float: left;
        }

        .chat-left .chat-img-attach {
            float: left;
            margin-left: 0;
            margin-right: 12px;
        }

        .input-group .form-control-lg.form-control {
            border-radius: 4px 0 0 4px;
            height: 46px;
        }

        .chat-user-list {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .chat-user-list .media {
            border-bottom: 1px solid #eaeaea;
            border-radius: inherit;
            padding: 10px;
            background-color: #fff;
        }

        .chat-user-list .media:hover {
            background-color: #f7f7f7;
        }

        .designation {
            color: #9e9e9e;
            font-size: 12px;
        }

        .online-date {
            color: #9e9e9e;
            font-size: 12px;
        }

        .drop-zone {
            width: 100%;
            height: 205px;
            border: 2px dashed #adb7be;
            text-align: center;
            padding: 25px 0 0;
            margin-bottom: 20px;
        }

        .drop-zone .drop-zone-caption {
            font-weight: 600;
        }

        .upload-list {
            padding: 0;
            list-style: none;
            margin: 0;
        }

        .upload-list .file-list {
            background-color: #fff;
            border-top: 1px solid #e3e3e3;
            padding: 10px 0;
        }

        .upload-list .file-list:first-child {
            border-top: none
        }

        .upload-list .upload-wrap {
            position: relative;
            padding: 0 20px 0 0;
            margin: 0 0 5px
        }

        .upload-list .file-name,
        .upload-list .file-size {
            display: inline-block;
            vertical-align: top;
            white-space: nowrap;
        }

        .upload-list .file-name {
            padding-right: 15px;
            overflow: hidden;
            max-width: 100%;
            text-overflow: ellipsis
        }

        .upload-list .file-size {
            color: #888;
        }

        .upload-list .file-close {
            border: none;
            background: none;
            color: #ccc;
            position: absolute;
            right: 0;
            top: 2px;
        }

        .upload-list .file-close:hover {
            color: #f62d51
        }

        .upload-list .upload-process {
            font-size: 10px;
            color: #888;
        }

        .upload-list .progress {
            margin-bottom: 5px;
        }

        .upload-list .file-name i {
            color: #888;
            margin: 0 5px 0 0;
            vertical-align: middle;
        }

        .upload-drop-zone {
            background-color: #fff;
            border: 2px dashed #e3e3e3;
            color: #ccc;
            height: 200px;
            line-height: 200px;
            margin-bottom: 20px;
            text-align: center;
        }

        .upload-drop-zone.drop {
            color: #222;
            border-color: #222;
        }

        .upload-text {
            font-size: 24px;
            margin-left: 10px;
        }

        .files-share-list {
            border: 1px solid #eaeaea;
            border-radius: 4px;
            margin-bottom: 20px;
            padding: 15px;
        }



        .form-focus {
            height: 50px;
            position: relative;
        }

        .form-focus .focus-label {
            font-size: 16px;
            font-weight: 400;
            opacity: 0.4;
            pointer-events: none;
            position: absolute;
            -webkit-transform: translate3d(0, 22px, 0) scale(1);
            -ms-transform: translate3d(0, 22px, 0) scale(1);
            -o-transform: translate3d(0, 22px, 0) scale(1);
            transform: translate3d(0, 22px, 0) scale(1);
            transform-origin: left top;
            transition: 240ms;
            left: 12px;
            top: -8px;
            z-index: 1;
            color: #888;
            margin-bottom: 0;
        }

        .form-focus.focused .focus-label {
            opacity: 1;
            font-weight: 300;
            top: -14px;
            font-size: 12px;
            z-index: 1;
        }

        .form-focus .form-control:focus~.focus-label,
        .form-focus .form-control:-webkit-autofill~.focus-label {
            opacity: 1;
            font-weight: 300;
            top: -14px;
            font-size: 12px;
            z-index: 1;
        }

        .form-focus .form-control {
            height: 50px;
            padding: 21px 12px 6px;
        }

        .form-focus .form-control::-webkit-input-placeholder {
            color: transparent;
            transition: 240ms;
        }

        .form-focus .form-control:focus::-webkit-input-placeholder {
            transition: none;
        }

        .form-focus.focused .form-control::-webkit-input-placeholder {
            color: #bbb;
        }

        .form-focus.select-focus .focus-label {
            opacity: 1;
            font-weight: 300;
            top: -20px;
            font-size: 12px;
            z-index: 1;
        }

        .form-focus .select2-container .select2-selection--single {
            border: 1px solid #e3e3e3;
            height: 50px;
        }

        .form-focus .select2-container--default .select2-selection--single .select2-selection__arrow {
            height: 48px;
            right: 7px;
        }

        .form-focus .select2-container--default .select2-selection--single .select2-selection__arrow b {
            border-color: #ccc transparent transparent;
            border-style: solid;
            border-width: 6px 6px 0;
            height: 0;
            left: 50%;
            margin-left: -10px;
            margin-top: -2px;
            position: absolute;
            top: 50%;
            width: 0;
        }

        .form-focus .select2-container--default.select2-container--open .select2-selection--single .select2-selection__arrow b {
            border-color: transparent transparent #ccc;
            border-width: 0 6px 6px;
        }

        .form-focus .select2-container .select2-selection--single .select2-selection__rendered {
            padding-right: 30px;
            padding-left: 12px;
            padding-top: 10px;
        }

        .form-focus .select2-container--default .select2-selection--single .select2-selection__rendered {
            color: #676767;
            font-size: 14px;
            font-weight: normal;
            line-height: 38px;
        }

        .form-focus .select2-container--default .select2-results__option--highlighted[aria-selected] {
            background-color: #fc6075;
        }



        .filter-row .btn {
            min-height: 50px;
            padding: 12px;
            text-transform: uppercase;
        }

        .action-label .label {
            display: inline-block;
            min-width: 85px;
            padding: 0.5em 0.6em;
        }

        .action-label i {
            margin-right: 3px;
        }

        .action-label .dropdown-menu .dropdown-item {
            padding: 5px 10px;
        }



        .action-icon {
            color: #777;
            font-size: 18px;
            display: inline-block;
        }

        .table .dropdown-menu {
            font-size: 13px;
            min-width: 120px;
            padding: 0;
        }

        .table .dropdown-menu .dropdown-item {
            padding: 5px 10px;
        }

        .dropdown-action .dropdown-toggle::after {
            display: none;
        }

        .profile-widget {
            background-color: #fff;
            border: 1px solid #ededed;
            border-radius: 4px;
            margin-bottom: 30px;
            padding: 20px;
            text-align: center;
            position: relative;
            box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }

        .profile-widget .user-name>a {
            color: #333;
        }

        .dropdown.profile-action {
            position: absolute;
            right: 5px;
            text-align: right;
            top: 10px;
        }

        .profile-action .dropdown-toggle::after {
            display: none;
        }

        .profile-img {
            cursor: pointer;
            height: 80px;
            margin: 0 auto;
            position: relative;
            width: 80px;
        }

        .profile-img .avatar {
            font-size: 24px;
            height: 80px;
            line-height: 80px;
            margin: 0;
            width: 80px;
        }

        .mobile-no>a {
            color: #777;
            display: inline-block;
        }

        .staff-mail>a {
            color: #777;
            display: inline-block;
            margin-top: 5px;
        }

        .staff-action-btns {
            margin-top: 10px;
        }

        .staff-id {
            font-size: 14px;
            font-weight: 500;
            margin-top: 5px;
        }

        .view-icons {
            float: right;
            margin-right: 10px;
        }

        .view-icons .btn {
            background-color: #fff;
            border: 1px solid #e3e3e3;
            color: #888;
            font-size: 18px;
            margin-right: 5px;
            min-width: 40px;
            padding: 4px;
        }

        .view-icons .btn.active {
            color: #333;
        }



        .calendar {
            float: left;
            margin-bottom: 0;
        }

        .fc-view {
            margin-top: 30px;
        }

        .none-border .modal-footer {
            border-top: none;
        }

        .fc-toolbar h2 {
            font-size: 18px;
            font-weight: 600;
            font-family: 'CircularStd', sans-serif;
            line-height: 30px;
            text-transform: uppercase;
        }

        .fc-day-grid-event .fc-time {
            font-family: 'CircularStd', sans-serif;
        }

        .fc-day {
            background: #fff;
        }

        .fc-toolbar .fc-state-active,
        .fc-toolbar .ui-state-active,
        .fc-toolbar button:focus,
        .fc-toolbar button:hover,
        .fc-toolbar .ui-state-hover {
            z-index: 0;
        }

        .fc th.fc-widget-header {
            background: #eeeeee;
            font-size: 14px;
            line-height: 20px;
            padding: 10px 0;
            text-transform: uppercase;
        }

        .fc-unthemed th,
        .fc-unthemed td,
        .fc-unthemed thead,
        .fc-unthemed tbody,
        .fc-unthemed .fc-divider,
        .fc-unthemed .fc-row,
        .fc-unthemed .fc-popover {
            border-color: #f3f3f3;
        }

        .fc-button {
            background: #f1f1f1;
            border: none;
            color: #797979;
            text-transform: capitalize;
            box-shadow: none !important;
            border-radius: 3px !important;
            margin: 0 3px !important;
            padding: 6px 12px !important;
            height: auto !important;
        }

        .fc-text-arrow {
            font-family: inherit;
            font-size: 16px;
        }

        .fc-state-hover {
            background: #f3f3f3;
        }

        .fc-state-highlight {
            background: #f0f0f0;
        }

        .fc-state-down,
        .fc-state-active,
        .fc-state-disabled {
            background-color: #f43b48 !important;
            color: #fff !important;
            text-shadow: none !important;
        }

        .fc-cell-overlay {
            background: #f0f0f0;
        }

        .fc-unthemed .fc-today {
            background: #fff;
        }

        .fc-event {
            border-radius: 2px;
            border: none;
            cursor: move;
            font-size: 13px;
            margin: 1px 7px;
            padding: 5px 5px;
            text-align: center;
        }

        .external-event {
            cursor: move;
            margin: 10px 0;
            padding: 6px 10px;
        }

        .external-event.bg-primary {
            background-color: rgba(127, 193, 252, 0.3) !important;
            color: #7fc1fc;
        }

        .external-event.bg-success {
            background-color: rgba(75, 211, 150, 0.3) !important;
            color: #4bd396;
        }

        .external-event.bg-info {
            background-color: rgba(58, 201, 214, 0.3) !important;
            color: #3ac9d6;
        }

        .external-event.bg-warning {
            background-color: rgba(249, 200, 81, 0.3) !important;
            color: #f9c851;
        }

        .external-event.bg-danger {
            background-color: rgba(245, 112, 122, 0.3) !important;
            color: #f5707a;
        }

        .external-event.bg-pink {
            background-color: rgba(240, 98, 146, 0.3) !important;
            color: #f06292;
        }

        .external-event.bg-purple {
            background-color: rgba(107, 95, 181, 0.3) !important;
            color: #6b5fb5;
        }

        .external-event.bg-inverse {
            background-color: rgba(59, 62, 71, 0.3) !important;
            color: #3b3e47;
        }

        .external-event.bg-orange {
            background-color: rgba(255, 152, 0, 0.3) !important;
            color: #ff9800;
        }

        .external-event.bg-brown {
            background-color: rgba(141, 110, 99, 0.3) !important;
            color: #8d6e63;
        }

        .external-event.bg-teal {
            background-color: rgba(38, 166, 154, 0.3) !important;
            color: #26a69a;
        }

        .fc-basic-view td.fc-week-number span {
            padding-right: 8px;
            font-weight: 700;
            font-family: 'CircularStd', sans-serif;
        }

        .fc-basic-view td.fc-day-number {
            padding-right: 8px;
            font-weight: 700;
            font-family: 'CircularStd', sans-serif;
        }

        .event-form .input-group .form-control {
            height: 40px;
        }


        .profile-details {
            text-align: center;
        }

        .personal-info li .title {
            color: #4f4f4f;
            float: left;
            font-weight: 500;
            margin-right: 30px;
            width: 25%;
        }

        .personal-info li .text {
            color: #8e8e8e;
            display: block;
            overflow: hidden;
        }

        .personal-info li {
            margin-bottom: 10px;
        }

        .personal-info {
            list-style: none;
            margin-bottom: 0;
            padding: 0;
        }

        .profile-view {
            position: relative;
        }

        .profile-view .profile-img-wrap {
            height: 120px;
            width: 120px;
        }

        .profile-view .profile-img {
            width: 120px;
            height: 120px;
        }

        .profile-view .profile-img .avatar {
            font-size: 24px;
            height: 120px;
            line-height: 120px;
            margin: 0;
            width: 120px;
        }

        .profile-view .profile-basic {
            margin-left: 140px;
            padding-right: 50px;
        }

        .profile-view .pro-edit {
            position: absolute;
            right: 0;
            top: 0;
        }

        .edit-icon {
            background-color: #eee;
            border: 1px solid #e3e3e3;
            border-radius: 24px;
            color: #bbb;
            float: right;
            font-size: 12px;
            line-height: 24px;
            min-height: 26px;
            text-align: center;
            width: 26px;
        }

        .edit-icon:hover {
            background-color: #f43b48;
            border-color: #f43b48;
            color: #fff;
        }

        .delete-icon {
            color: #e30b0b;
            float: right;
            font-size: 18px;
        }

        .delete-icon:hover {
            color: #e30b0b;
        }

        .staff-msg {
            margin-top: 30px;
        }

        .experience-box {
            position: relative;
        }

        .experience-list {
            list-style: none;
            margin: 0;
            padding: 0;
            position: relative;
        }

        .experience-list::before {
            background: #ddd;
            bottom: 0;
            content: "";
            left: 8px;
            position: absolute;
            top: 8px;
            width: 2px;
        }

        .experience-list>li {
            position: relative;
        }

        .experience-list>li:last-child .experience-content {
            margin-bottom: 0;
        }

        .experience-user .avatar {
            height: 32px;
            line-height: 32px;
            margin: 0;
            width: 32px;
        }

        .experience-list>li .experience-user {
            background: #fff;
            height: 10px;
            left: 4px;
            margin: 0;
            padding: 0;
            position: absolute;
            top: 4px;
            width: 10px;
        }

        .experience-list>li .experience-content {
            background-color: #fff;
            margin: 0 0 20px 40px;
            padding: 0;
            position: relative;
        }

        .experience-list>li .experience-content .timeline-content {
            color: #9e9e9e;
        }

        .experience-list>li .experience-content .timeline-content a.name {
            color: #616161;
            font-weight: bold;
        }

        .experience-list>li .time {
            color: #bdbdbd;
            display: block;
            font-size: 12px;
            line-height: 1.35;
        }

        .before-circle {
            background-color: #ddd;
            border-radius: 50%;
            height: 10px;
            width: 10px;
        }

        .skills>span {
            border: 1px solid #ccc;
            border-radius: 500px;
            display: inline-block;
            margin-bottom: 10px;
            padding: 6px 12px;
            text-align: center;
        }

        .profile-info-left {
            border-right: 2px dashed #ccc;
        }

        .bootstrap-tagsinput {
            background-color: #fff;
            border: 1px solid #e3e3e3;
            border-radius: 0;
            box-shadow: unset;
            display: block;
            min-height: 44px;
            padding: 6px 6px 0;
        }

        .bootstrap-tagsinput .badge {
            font-size: 14px;
            font-weight: normal;
            margin-bottom: 6px;
            padding: 10px 15px;
        }

        .add-more a {
            color: #f43b48;
        }

        .add-more a:hover {
            color: #f10e1d;
        }

        .avatar-box {
            float: left;
        }

        .pro-overview .personal-info li .title {
            width: 50%;
        }

        .profile-box {
            min-height: 250px;
        }



        .notifications {
            padding: 0;
        }

        .notifications .noti-content {
            height: 290px;
            width: 350px;
            overflow-y: auto;
            position: relative;
        }

        .notifications .notification-heading {
            margin: 0;
            font-size: 14px;
            font-weight: normal;
            line-height: 1.45;
            color: #616161;
        }

        .notifications .notification-time {
            font-size: 12px;
            line-height: 1.35;
            color: #bdbdbd;
        }

        .notification-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .notifications ul.notification-list>li {
            margin-top: 0;
            border-bottom: 1px solid #f5f5f5;
        }

        .notifications ul.notification-list>li:last-child {
            border-bottom: none;
        }

        .notifications ul.notification-list>li a {
            display: block;
            padding: 12px;
            border-radius: 2px;
        }

        .notifications ul.notification-list>li a:hover {
            background-color: #fafafa;
        }

        .notifications ul.notification-list>li .list-item {
            border: 0;
            padding: 0;
            position: relative;
        }

        .notifications .media {
            margin-top: 0;
            border-bottom: 1px solid #f5f5f5;
        }

        .notifications .media:last-child {
            border-bottom: none;
        }

        .notifications .media a {
            display: block;
            padding: 12px;
            border-radius: 2px;
        }

        .notifications .media a:hover {
            background-color: #fafafa;
        }

        .notifications .media-list .media-left {
            padding-right: 8px;
        }

        .topnav-dropdown-header {
            border-bottom: 1px solid #eee;
            text-align: center;
        }

        .topnav-dropdown-header,
        .topnav-dropdown-footer {
            font-size: 12px;
            height: 32px;
            line-height: 32px;
            padding-left: 12px;
            padding-right: 12px;
        }

        .topnav-dropdown-header .notification-title {
            color: #333;
            display: block;
            float: left;
            font-size: 14px;
        }

        .topnav-dropdown-header .clear-noti {
            color: #f83f37;
            float: right;
            font-size: 11px;
            text-transform: uppercase;
        }

        .topnav-dropdown-footer a {
            display: block;
            text-align: center;
            color: #333;
        }

        .user-menu.nav>li>a .badge {
            color: #fff;
            font-weight: 700;
            position: absolute;
            right: 3px;
            top: 6px;
        }

        .user-menu.nav>li>a .badge {
            background-color: #7460ee;
        }

        .user-menu.nav>li>a>i {
            font-size: 20px;
            line-height: 60px;
        }

        .noti-details {
            color: #989c9e;
            margin-bottom: 0;
        }

        .noti-title {
            color: #333;
        }

        .noti-time {
            margin: 0;
        }



        .roles-menu {
            margin-top: 20px;
        }

        .roles-menu>ul {
            background-color: #fff;
            border: 1px solid #e3e3e3;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .roles-menu>ul>li {
            display: block;
            position: relative;
        }

        .roles-menu>ul>li a {
            border-left: 3px solid transparent;
            color: #333;
            display: block;
            padding: 10px 15px;
            position: relative;
        }

        .roles-menu>ul>li.active a {
            border-color: #f43b48;
            color: #f43b48;
        }

        .roles-menu>ul>li a:hover {
            background-color: #eee;
            border-color: #f43b48;
        }

        .role-action {
            float: right;
            display: none;
        }

        .roles-menu>ul>li a:hover .role-action {
            display: block;
        }

        .slide-nav .sidebar {
            margin-left: 0;
        }


        .fixed-header .custom-menu {
            margin: 1px 0 0;
        }

        .topnav-dropdown-footer {
            border-top: 1px solid #eee;
        }

        .list-box {
            list-style: none;
            padding-left: 0;
        }

        .list-item {
            border-bottom: 1px solid #eaeaea;
            padding: 10px;
            position: relative;
        }

        .list-left {
            height: 48px;
            position: absolute;
            width: 48px;
        }

        .files-icon {
            background-color: #f5f5f5;
            border: 1px solid #ddd;
            border-radius: 4px;
            display: inline-block;
            height: 38px;
            line-height: 38px;
            text-align: center;
            width: 38px;
        }

        .files-icon i {
            color: #777;
            font-size: 20px;
        }

        .list-body {
            padding: 0 0 0 50px;
        }

        .message-author {
            color: #333;
            float: left;
            font-weight: 500;
            width: 175px;
            display: block;
            max-width: 100%;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .message-time {
            color: #888;
            float: right;
            font-size: 11px;
        }

        .message-content {
            color: #333;
            font-size: 13px;
            display: block;
            max-width: 100%;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .files-action .dropdown-menu {
            left: auto;
            right: 0;
        }


        .team-members {
            display: inline-flex;
            flex-wrap: wrap;
            list-style: none;
            margin-bottom: 0;
            padding: 0;
        }

        .team-members>li:first-child a {
            margin-left: 0;
        }

        .team-members>li>a {
            border: 2px solid #fff;
            border-radius: 100%;
            display: block;
            height: 30px;
            overflow: hidden;
            width: 30px;
        }

        .team-members .all-users {
            line-height: 28px;
            opacity: 0.8;
        }

        .all-users {
            background-color: #ff5e3a;
            color: #fff;
            font-size: 10px;
            font-weight: 800;
            line-height: 34px;
            text-align: center;
        }

        .all-users:hover,
        .all-users:active {
            color: #fff;
        }

        .team-members img {
            width: 100%;
        }

        .project-title {
            margin: 0 0 5px;
        }

        .project-title>h5 {
            font-size: 16px;
            margin-bottom: 0;
            margin-top: 0;
        }

        .project-title>a {
            color: #333;
        }

        .avatar-dropdown .dropdown-menu {
            min-width: unset;
            width: 100px;
            padding: 0;
        }

        .avatar-dropdown .avatar-group {
            min-height: 88px;
            padding: 2px;
            white-space: normal;
        }

        .avatar-dropdown .avatar-group .avatar {
            margin: 2px;
        }

        .avatar-dropdown .avatar-pagination {
            border-top: 1px solid rgba(0, 0, 0, 0.1);
        }

        .avatar-dropdown .page-link {
            padding: .3rem 0.55rem;
            border-radius: 0 !important;
            border: 0;
        }

        .avatar-dropdown .dropdown-toggle::after {
            display: none;
        }

        .invoice-details,
        .invoice-payment-details>li span {
            float: right;
            text-align: right;
        }

        .table .team-members {
            flex-wrap: nowrap;
        }

        .table .team-members>li>a {
            width: 32px;
            height: 32px;
        }

        .table .team-members .all-users {
            line-height: 30px;
        }

        .attach-files>ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .attach-files li {
            display: inline-block;
            margin-right: 10px;
            position: relative;
        }

        .attach-files li img {
            width: 50px;
        }

        .file-remove {
            color: #f00;
            position: absolute;
            right: -6px;
            top: -7px;
        }

        .attach-files li:last-child {
            margin-right: 0;
        }

        .inv-logo {
            height: auto;
            margin-bottom: 20px;
            max-height: 100px;
            width: auto;
        }


        .task-chat-contents {
            background-color: #fff;
        }

        .task-chat-contents .chat-left .chat-content {
            max-width: 100%;
        }

        .task-chat-view {
            border-left: 1px solid #eaeaea;
        }

        .task-left-sidebar {
            width: 58.3333%;
        }

        .task-right-sidebar {
            width: 41.6667%;
        }

        .task-chat-view .chat-left .chat-content {
            border: 0;
            padding: 0;
        }

        .task-chat-view .chat-left .chat-body {
            margin-left: 50px;
        }

        .task-chat-view .chat-date {
            background-color: #fff;
        }

        .task-chat-view .chats {
            padding: 15px 15px 30px;
        }

        .task-chat-view .avatar {
            width: 30px;
            height: 30px;
            line-height: 30px;
        }

        .followers-add {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 50%;
            color: #ccc;
            display: inline-block;
            font-size: 20px;
            height: 30px;
            line-height: 30px;
            text-align: center;
            width: 30px;
        }

        .followers-add:hover {
            border: 1px solid #8c8c8c;
            color: #8c8c8c;
        }

        .completed-task-msg {
            margin-bottom: 30px;
            margin-left: 50px;
        }

        .task-chat-contents .chat.chat-left {
            margin-bottom: 20px;
        }

        .file-attached {
            color: #333;
            font-size: 13px;
        }

        .file-attached i {
            font-size: 16px;
        }

        .task-attach-img>img {
            border: 1px solid #eaeaea;
            max-width: 100%;
        }

        .attach-img-download {
            margin-bottom: 5px;
        }

        .task-chat-view .chat-left .chat-time {
            color: #a3a3a3;
            display: inline-block;
            font-size: 11px;
        }

        .task-chat-user {
            color: #333;
            font-size: 13px;
        }

        .task-chat-view .chat-content>p {
            font-size: 13px;
            margin-bottom: 0;
        }

        .task-time {
            color: #a3a3a3;
            display: inline-block;
            font-size: 11px;
        }

        .task-success {
            color: #55ce63;
            font-size: 13px;
        }

        .task-success a {
            color: #55ce63;
        }

        .task-attach-img {
            margin-bottom: 20px;
        }

        .task-assign {
            float: left;
        }

        .assign-title {
            float: left;
            margin-right: 10px;
            margin-top: 5px;
        }

        .task-assign>a {
            float: left;
        }

        .followers-add>i {
            line-height: 28px;
        }

        .task-followers {
            display: flex;
            margin-top: 15px;
        }

        .followers-title {
            margin: 5px 10px 0 0;
        }

        .task-line {
            border-color: #eaeaea;
        }

        .task-information {
            color: #a3a3a3;
            font-size: 11px;
            line-height: 17px;
            min-width: 1px;
            margin-left: 50px;
        }

        .task-info-line {
            overflow-wrap: break-word;
        }

        .task-user {
            color: #888;
            font-weight: 500;
        }

        .task-information .task-time {
            display: inline-block;
            padding-left: 10px;
        }

        .task-btn-right {
            display: none !important;
        }

        .task:hover .task-btn-right {
            display: table-cell !important;
        }

        .task-action-btn.task-check {
            text-align: left !important;
            width: 40px;
        }

        .add-task-btn {
            cursor: pointer;
            padding: 6px 10px;
            text-transform: uppercase;
        }

        .action-circle {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 100%;
            height: 20px;
            width: 20px;
            display: inline-block;
            text-align: center;
            cursor: pointer;
            -webkit-transition: all 300ms ease;
            -moz-transition: all 300ms ease;
            -ms-transition: all 300ms ease;
            -o-transition: all 300ms ease;
            transition: all 300ms ease;
        }

        .action-circle .material-icons {
            color: #ccc;
            font-size: 18px;
            vertical-align: -3px;
        }

        .action-circle.completed {
            background: #35BA67;
            border: 1px solid #2fa65c;
        }

        .action-circle.completed .material-icons {
            color: #fff;
        }

        .action-circle.large {
            height: 24px;
            width: 24px;
        }

        .action-circle.large .material-icons {
            font-size: 16px;
            vertical-align: -4px;
        }

        .task-wrapper {
            padding: 20px;
            width: 100%;
            margin: 0 auto;
            box-sizing: border-box;
        }

        .task-wrapper .mark-all-tasks {
            text-align: right;
            padding-bottom: 15px;
        }

        .task-wrapper .mark-all-tasks .mark-all-tasks-container {
            overflow: hidden;
            position: relative;
        }

        .task-wrapper .mark-all-tasks .mark-all-btn {
            cursor: pointer;
            display: inline-block;
            -webkit-transition: all 200ms ease;
            -moz-transition: all 200ms ease;
            -ms-transition: all 200ms ease;
            -o-transition: all 200ms ease;
            transition: all 200ms ease;
        }

        .task-wrapper .mark-all-tasks .mark-all-btn#mark-all-finished {
            color: #35BA67;
        }

        .task-wrapper .mark-all-tasks .mark-all-btn#mark-all-incomplete {
            color: #666;
        }

        .task-wrapper .mark-all-tasks .mark-all-btn#mark-all-incomplete .action-circle {
            border: 1px solid #666;
        }

        .task-wrapper .mark-all-tasks .mark-all-btn#mark-all-incomplete .action-circle .material-icons {
            color: #666;
        }

        .task-wrapper .mark-all-tasks .mark-all-btn.move-up {
            -webkit-transform: translateY(-30px);
            -moz-transform: translateY(-30px);
            -ms-transform: translateY(-30px);
            -o-transform: translateY(-30px);
            transform: translateY(-30px);
            position: absolute;
            right: 0;
        }

        .task-wrapper .mark-all-tasks .mark-all-btn.move-down {
            -webkit-transform: translateY(30px);
            -moz-transform: translateY(30px);
            -ms-transform: translateY(30px);
            -o-transform: translateY(30px);
            transform: translateY(30px);
            position: absolute;
            right: 0;
        }

        .task-wrapper .task-list-header h3,
        .task-wrapper .task-list-footer h3 {
            font-size: 24px;
            font-weight: 400;
            color: #666;
        }

        .task-wrapper .task-list-body {
            max-height: 500px;
            overflow: auto;
        }

        .task-wrapper #task-list {
            list-style: none;
            margin: 0;
            padding: 0;
            border-bottom: 1px solid #eaeaea;
        }

        .task-wrapper #task-list li {
            margin: 0;
            padding: 0;
        }

        .task-wrapper #task-list li .task-container {
            display: table;
            background: #fff;
            padding: 8px 15px;
            width: 100%;
            border: 1px solid #eaeaea;
            border-bottom: none;
            box-sizing: border-box;
            position: relative;
            -webkit-transition: background 200ms ease;
            -moz-transition: background 200ms ease;
            -ms-transition: background 200ms ease;
            -o-transition: background 200ms ease;
            transition: background 200ms ease;
        }

        .task-wrapper #task-list li .task-container .task-label {
            display: table-cell;
            font-weight: 400;
            vertical-align: middle;
            color: #333;
            word-break: break-all;
        }

        .task-wrapper #task-list li .task-container .task-action-btn {
            display: table-cell;
            vertical-align: middle;
            text-align: right;
        }

        .task-wrapper #task-list li .task-container .task-action-btn .action-circle:hover {
            border: 1px solid #8c8c8c;
            background: #fff;
        }

        .task-wrapper #task-list li .task-container .task-action-btn .action-circle:hover .material-icons {
            color: #8c8c8c;
        }

        .task-wrapper #task-list li .task-container:hover {
            background: #EBEEEF;
        }

        .task-wrapper #task-list li.completed .task-container {
            background: #f9f9f9;
        }

        .task-wrapper #task-list li.completed .task-container .complete-btn {
            background: #35BA67;
            border: 1px solid #2fa65c;
        }

        .task-wrapper #task-list li.completed .task-container .complete-btn .material-icons {
            color: #fff;
        }

        .task-wrapper #task-list li.completed .task-container .complete-btn:hover {
            background: #35BA67;
            border: 1px solid #2fa65c;
        }

        .task-wrapper #task-list li.completed .task-container .complete-btn:hover .material-icons {
            color: #fff;
        }

        .task-wrapper #task-list li.completed .task-container .task-label {
            color: #ccc;
        }

        .task-wrapper #task-list li.new .task-container {
            -webkit-animation: taskHighlighter 2000ms linear 1;
            animation: taskHighlighter 2000ms linear 1;
        }

        .task-wrapper .task-list-footer {
            position: relative;
        }

        .task-wrapper .task-list-footer .add-task-btn-wrapper {
            text-align: center;
        }

        .task-wrapper .task-list-footer .add-task-btn {
            cursor: pointer;
            border: 2px solid #9B1BCC;
            display: inline-block;
            height: 35px;
            width: 35px;
            border-radius: 10px;
            -webkit-transition: all 300ms ease;
            -moz-transition: all 300ms ease;
            -ms-transition: all 300ms ease;
            -o-transition: all 300ms ease;
            transition: all 300ms ease;
        }

        .task-wrapper .task-list-footer .add-task-btn.hide {
            opacity: 1;
            visibility: visible;
            display: block;
        }

        .task-wrapper .task-list-footer .add-task-btn:hover {
            background: #9B1BCC;
        }

        .task-wrapper .task-list-footer .add-task-btn:hover .material-icons {
            color: #EBEEEF;
        }

        .task-wrapper .task-list-footer .add-task-btn .material-icons {
            color: #9B1BCC;
            font-size: 34px;
        }

        .task-wrapper .task-list-footer .new-task-wrapper {
            -webkit-transition: all 300ms ease;
            -moz-transition: all 300ms ease;
            -ms-transition: all 300ms ease;
            -o-transition: all 300ms ease;
            transition: all 300ms ease;
            max-height: 0;
            overflow: hidden;
        }

        .task-wrapper .task-list-footer .new-task-wrapper::after {
            content: "";
            display: block;
            clear: both;
        }

        .task-wrapper .task-list-footer .new-task-wrapper textarea {
            box-sizing: border-box;
            width: 100%;
            border: 1px solid #eaeaea;
            border-top: 0;
            height: 45px;
            resize: none;
            padding: 10px 15px;
            margin-bottom: 20px;
            -webkit-transition: all 300ms ease;
            -moz-transition: all 300ms ease;
            -ms-transition: all 300ms ease;
            -o-transition: all 300ms ease;
            transition: all 300ms ease;
        }

        .task-wrapper .task-list-footer .new-task-wrapper textarea:focus {
            border: 1px solid #bfbfbf;
            outline: none;
        }

        .task-wrapper .task-list-footer .new-task-wrapper textarea.error {
            border: 1px solid #D93737;
            outline: none;
        }

        .task-wrapper .task-list-footer .new-task-wrapper .error-message {
            color: #D93737;
            font-style: italic;
        }

        .task-wrapper .task-list-footer .new-task-wrapper .btn {
            padding: 6px 12px;
            float: right;
            cursor: pointer;
        }

        .task-wrapper .task-list-footer .new-task-wrapper .add-new-task-btn {
            background: #fff;
            border: 1px solid #ccc;
        }

        .task-wrapper .task-list-footer .new-task-wrapper.visible {
            max-height: 300px;
            overflow: auto;
        }

        .notification-popup {
            z-index: 1051;
            position: fixed;
            top: 20px;
            right: 10px;
            width: 300px;
            display: inline-block;
            background: #1F8FEF;
            border: 1px solid #1082e4;
            color: #fff;
            padding: 20px;
            opacity: .8;
            border-radius: 2px;
            box-sizing: border-box;
            -webkit-transition: all 300ms ease;
            -moz-transition: all 300ms ease;
            -ms-transition: all 300ms ease;
            -o-transition: all 300ms ease;
            transition: all 300ms ease;
        }

        .notification-popup.success {
            background: #35BA67;
            border: 1px solid #2fa65c;
        }

        .notification-popup p {
            margin-top: 0;
            margin-bottom: 0px;
        }

        .notification-popup .task {
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
            max-width: 100%;
            display: inline-block;
        }

        .notification-popup .notification-text {
            font-size: 14px;
            display: inline-block;
            overflow: hidden;
        }

        .notification-popup.hide {
            opacity: 0;
            visibility: hidden;
        }

        .sidebar-overlay {
            display: none;
            position: fixed;
            z-index: 90;
            height: 100%;
            left: 0;
            top: 60px;
            width: 100%;
            z-index: 1040;
            background-color: rgba(0, 0, 0, 0.6);
        }

        .sidebar-overlay.opened {
            display: block;
        }

        .sidebar-menu.opened {
            opacity: 1;
            -webkit-transform: translateX(0px);
            -moz-transform: translateX(0px);
            -ms-transform: translateX(0px);
            -o-transform: translateX(0px);
            transform: translateX(0px);
            margin-left: 0;
        }

        html.menu-opened {
            overflow: hidden;
        }

        html.menu-opened body {
            overflow: hidden;
        }

        .task-chat-view.opened {
            margin-right: 0;
        }

        .chat-profile-view.opened {
            margin-right: 0;
        }

        .task-header {
            display: flex;
        }

        .task-header .assignee-info {
            align-items: center;
            border: 1px solid transparent;
            border-radius: 10px;
            display: inline-flex;
            flex: 0 1 180px;
            padding: 5px 10px 5px 5px;
            position: relative;
        }

        .task-header .assignee-info>a {
            align-items: center;
            color: #333;
            display: flex;
        }

        .task-header .task-head-title {
            color: #8e8e8e;
            font-size: 12px;
        }

        .task-assignee {
            font-size: 13px;
            max-width: 120px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .assignee-info:hover {
            border-color: #e3e3e3;
        }

        .remove-icon {
            align-items: center;
            background-color: #e3e3e3;
            border-radius: 50%;
            color: #333;
            cursor: pointer;
            display: flex;
            height: 20px;
            justify-content: center;
            margin-right: 10px;
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            visibility: hidden;
            width: 20px;
        }

        .remove-icon:hover {
            background-color: #d3d3d3;
        }

        .task-header .assignee-info:hover .remove-icon {
            visibility: visible;
        }

        .remove-icon i {
            color: #8e8e8e;
            font-size: 12px;
        }

        .due-icon span {
            align-items: center;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 50%;
            color: #ccc;
            display: flex;
            height: 30px;
            justify-content: center;
            line-height: 30px;
            margin-right: 10px;
            width: 30px;
        }

        .due-icon span i {
            font-size: 18px;
        }

        .task-due-date {
            align-items: center;
            border: 1px solid transparent;
            border-radius: 10px;
            display: flex;
            flex: 0 0 160px;
            margin-left: 10px;
            padding: 5px 10px 5px 5px;
            position: relative;
        }

        .task-due-date:hover {
            border-color: #e3e3e3;
        }

        .task-header .task-due-date>a {
            align-items: center;
            color: #333;
            display: flex;
        }

        .due-info .due-date {
            color: #f62d51;
            font-size: 13px;
        }

        .task-header .task-due-date:hover .remove-icon {
            visibility: visible;
        }

        .task-desc {
            align-items: flex-start;
            display: flex;
            margin-bottom: 15px;
            margin-top: 5px;
        }

        .task-textarea {
            display: flex;
            width: 100%;
        }

        .task-desc-icon {
            color: #ccc;
            margin-right: 10px;
            margin-top: 5px;
        }

        .task-textarea .form-control {
            border: 1px solid transparent;
            border-radius: 5px;
            font-size: 13px;
            resize: none;
        }

        .task-textarea:hover .form-control {
            border-color: #e3e3e3;
        }

        .task-complete-btn {
            align-items: center;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            color: #333;
            display: flex;
            font-size: 14px;
            padding: 6px 10px;
        }

        .task-complete-btn:hover {
            background-color: #f7f7f7;
            color: #333;
        }

        .task-complete-btn i {
            font-size: 20px;
            margin-right: 3px;
        }

        .task-completed {
            background-color: #35ba67;
            border-color: #2fa65c;
            color: #fff;
        }

        .task-completed:hover {
            background-color: #35ba67;
            border-color: #2fa65c;
            color: #fff;
        }


        .project-user .list-box {
            margin: 0;
        }

        .project-files i {
            color: #76838f;
            font-size: 50px;
        }

        .project-user .list-item {
            border: 0 none;
            padding: 10px 0;
        }

        .table-border {
            border: 1px solid #ddd;
        }

        .file-size {
            color: #888;
        }

        .project-task .task-wrapper {
            padding: 0;
        }

        .project-task .tab-content {
            min-height: 200px;
        }

        .uploaded-box {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 4px;
            display: block;
            margin-bottom: 20px;
            padding: 4px;
        }

        .uploaded-box .uploaded-img-name {
            color: #333;
            padding: 9px;
            text-align: center;
        }


        .payslip-title {
            margin-bottom: 20px;
            text-align: center;
            text-decoration: underline;
            text-transform: uppercase;
        }



        .first-off {
            white-space: pre-wrap;
        }

        .stats-info {
            background-color: #fff;
            border: 1px solid #e5e5e5;
            border-radius: 4px;
            margin-bottom: 20px;
            padding: 15px;
            text-align: center;
        }

        .stats-info h6 {
            color: #1f1f1f;
            font-size: 16px;
            font-weight: normal;
            line-height: 18px;
            margin-bottom: 5px;
        }

        .stats-info h4 {
            font-size: 24px;
            margin-bottom: 0;
        }

        .stats-info h4 span {
            color: #727272;
            font-size: 12px;
        }

        .punch-det {
            background-color: #f9f9f9;
            border: 1px solid #e3e3e3;
            border-radius: 4px;
            margin-bottom: 20px;
            padding: 10px 15px;
        }

        .punch-det h6 {
            line-height: 20px;
            margin-bottom: 0;
        }

        .punch-det p {
            color: #727272;
            font-size: 14px;
            margin-bottom: 0;
        }

        .punch-info {
            margin-bottom: 20px;
        }

        .punch-hours {
            align-items: center;
            background-color: #f9f9f9;
            border: 5px solid #e3e3e3;
            border-radius: 50%;
            display: flex;
            font-size: 18px;
            height: 120px;
            justify-content: center;
            margin: 0 auto;
            width: 120px;
        }

        .punch-btn-section {
            margin-bottom: 20px;
            text-align: center;
        }

        .punch-btn {
            border-radius: 50px;
            font-size: 18px;
            font-weight: 600;
            max-width: 100%;
            padding: 8px 40px;
        }

        .punch-status .stats-box {
            margin-bottom: 0;
        }

        .stats-list {
            height: 331px;
            overflow-y: auto;
        }

        .att-statistics .stats-info {
            margin-bottom: 5px;
        }

        .att-statistics .progress {
            height: 4px;
        }

        .statistics .row {
            margin-left: -5px;
            margin-right: -5px;
        }

        .statistics .row>div {
            padding-left: 5px;
            padding-right: 5px;
        }

        .stats-box {
            background-color: #f9f9f9;
            border: 1px solid #e3e3e3;
            margin-bottom: 15px;
            padding: 5px;
        }

        .stats-box p {
            margin: 0;
            font-size: 12px;
        }

        .stats-box>h6 {
            margin-bottom: 0;
        }

        .stats-info:last-child .progress {
            margin-bottom: 0;
        }

        .stats-info p {
            display: flex;
            font-size: 12px;
            justify-content: space-between;
            margin-bottom: 5px;
        }

        .recent-activity .res-activity-list {
            height: 328px;
            list-style-type: none;
            margin-bottom: 0;
            overflow-y: auto;
            padding-left: 30px;
            position: relative;
        }

        .recent-activity .res-activity-list li {
            margin-bottom: 15px;
            position: relative;
        }

        .recent-activity .res-activity-list li:last-child {
            margin-bottom: 0;
        }

        .recent-activity .res-activity-list li:before {
            width: 10px;
            height: 10px;
            left: -30px;
            top: 0px;
            border: 2px solid #f43b48;
            margin-right: 15px;
            z-index: 2;
            background: #fff;
        }

        .recent-activity .res-activity-list li:before {
            content: "";
            position: absolute;
            border-radius: 100%;
        }

        .recent-activity .res-activity-list:after {
            content: "";
            border: 1px solid #e5e5e5;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 4px;
        }

        .recent-activity .res-activity-time {
            color: #bbb;
            font-size: 12px;
        }

        .recent-activity h6 {
            line-height: 14px;
            margin-bottom: 0;
        }

        .recent-activity p {
            font-size: 13px;
            margin-bottom: 0;
        }

        .half-day {
            width: 15px;
        }

        .ticket-header {
            padding: 6px 0;
        }

        .ticket-priority {
            font-size: 14px;
        }

        .ticket-chat-view {
            width: 33.3333%;
        }

        .dataTables_wrapper.container-fluid {
            padding-left: 0;
            padding-right: 0;
        }



        .tab-box {
            border-bottom: 0;
            margin-bottom: 10px;
            padding: 0;
        }

        .team-members a.followers-add {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 50%;
            color: #ccc;
            display: inline-block;
            font-size: 20px;
            height: 30px;
            line-height: 30px;
            text-align: center;
            width: 30px;
        }



        .table-inbox input[type="radio"],
        .table-inbox input[type="checkbox"] {
            cursor: pointer;
        }

        .mail-list {
            list-style: none;
            padding: 0;
        }

        .mail-list>li>a {
            color: #333;
            display: block;
            padding: 10px;
        }

        .mail-list>li.active>a {
            color: #f43b48;
            font-weight: bold;
        }

        .unread .name,
        .unread .subject,
        .unread .mail-date {
            color: #000;
            font-weight: 600;
        }

        .table-inbox .fa-star {
            color: #ffd200;
        }

        .table-inbox .starred.fa-star {
            color: #ffd200;
        }

        .table.table-inbox>tbody>tr>td,
        .table.table-inbox>tbody>tr>th,
        .table.table-inbox>tfoot>tr>td,
        .table.table-inbox>tfoot>tr>th,
        .table.table-inbox>thead>tr>td,
        .table.table-inbox>thead>tr>th {
            border-bottom: 1px solid #f2f2f2;
            border-top: 0;
        }

        .table-inbox {
            font-size: 14px;
            margin-bottom: 0;
        }

        .note-editor.note-frame {
            border: 1px solid #ccc;
            box-shadow: inherit;
        }

        .note-editor.note-frame .note-statusbar {
            background-color: #fff;
        }

        .note-editor.note-frame.fullscreen {
            top: 60px;
        }

        .mail-title {
            font-weight: bold;
            text-transform: uppercase;
        }

        .form-control.search-message {
            border-radius: 4px;
            height: 38px;
            margin-left: 5px;
            width: 180px;
        }

        .table-inbox tr {
            cursor: pointer;
        }

        table.table-inbox tbody tr.checked {
            background-color: #ffffcc;
        }

        .mail-label {
            font-size: 16px !important;
            margin-right: 5px;
        }



        .attachments {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .attachments li {
            border: 1px solid #eee;
            float: left;
            margin-bottom: 10px;
            margin-right: 10px;
            width: 200px;
        }

        .attach-file {
            color: #777;
            font-size: 70px;
            padding: 10px;
            text-align: center;
            min-height: 153px;
        }

        .attach-file>i {
            line-height: 133px;
        }

        .attach-info {
            background-color: #f4f4f4;
            padding: 10px;
        }

        .attach-filename {
            color: #777;
            font-weight: bold;
        }

        .attach-filesize {
            color: #999;
            font-size: 12px;
        }

        .attach-file img {
            height: auto;
            max-width: 100%;
        }

        .mailview-header {
            border-bottom: 1px solid #ddd;
            margin-bottom: 20px;
            padding-bottom: 15px;
        }

        .mailview-footer {
            border-top: 1px solid #ddd;
            margin-top: 20px;
            padding-top: 15px;
        }

        .mailview-footer .btn-white {
            min-width: 102px;
        }

        .sender-img {
            float: left;
            margin-right: 10px;
            width: 40px;
        }

        .sender-name {
            display: block;
        }

        .receiver-name {
            color: #777;
        }

        .right-action {
            text-align: right;
        }

        .mail-view-title {
            font-weight: 500;
            font-size: 24px;
            margin: 0;
        }

        .mail-view-action {
            float: right;
        }

        .mail-sent-time {
            float: right;
        }



        .voice-call-avatar {
            flex-direction: column;
            display: flex;
            align-items: center;
            justify-content: center;
            flex: 2;
        }

        .voice-call-avatar .call-avatar {
            margin: 15px;
            width: 150px;
            height: 150px;
            border-radius: 100%;
            border: 1px solid rgba(0, 0, 0, 0.1);
            padding: 3px;
            background-color: #fff;
        }

        .call-duration {
            display: inline-block;
            font-size: 30px;
            margin-top: 4px;
            position: absolute;
            left: 0;
        }

        .voice-call-avatar .call-timing-count {
            padding: 5px;
        }

        .voice-call-avatar .username {
            font-size: 18px;
            text-transform: uppercase;
        }

        .call-icons {
            text-align: center;
            position: relative;
        }

        .call-icons .call-items {
            border-radius: 5px;
            padding: 0;
            margin: 0;
            list-style: none;
            display: inline-block;
        }

        .call-icons .call-items .call-item {
            display: inline-block;
            text-align: center;
            margin-right: 5px;
        }

        .call-icons .call-items .call-item:last-child {
            margin-right: 0;
        }

        .call-icons .call-items .call-item a {
            color: #777;
            border: 1px solid #ddd;
            width: 50px;
            height: 50px;
            line-height: 50px;
            border-radius: 50px;
            display: inline-block;
            font-size: 20px;
        }

        .call-icons .call-items .call-item a i {
            width: 18px;
            height: 18px;
        }

        .user-video {
            bottom: 0;
            left: 0;
            overflow: auto;
            position: absolute;
            right: 0;
            top: 0;
            z-index: 10;
        }

        .user-video img {
            width: auto;
            max-width: 100%;
            height: auto;
            max-height: 100%;
            display: block;
            margin: 0 auto;
        }

        .user-video video {
            width: auto;
            max-width: 100%;
            height: auto;
            max-height: 100%;
            display: block;
            margin: 0 auto;
        }

        .my-video {
            position: absolute;
            z-index: 99;
            bottom: 20px;
            right: 20px;
        }

        .my-video ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .my-video ul li {
            float: left;
            width: 120px;
            margin-right: 10px;
        }

        .my-video ul li img {
            border: 3px solid #fff;
            border-radius: 6px;
        }

        .end-call {
            position: absolute;
            top: 7px;
            right: 0;
        }

        .end-call a {
            background-color: #f06060;
            border-radius: 50px;
            color: #fff;
            display: inline-block;
            line-height: 10px;
            padding: 8px 25px;
            text-transform: uppercase;
        }

        .call-users {
            position: absolute;
            z-index: 99;
            bottom: 20px;
            right: 20px;
        }

        .call-users ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .call-users ul li {
            float: left;
            width: 80px;
            margin-left: 10px;
        }

        .call-users ul li img {
            border-radius: 6px;
            padding: 2px;
            background-color: #fff;
            border: 1px solid rgba(0, 0, 0, 0.1);
        }

        .call-mute {
            width: 80px;
            height: 80px;
            background-color: rgba(0, 0, 0, 0.5);
            position: absolute;
            display: inline-block;
            text-align: center;
            line-height: 80px;
            border-radius: 6px;
            font-size: 30px;
            color: #fff;
            display: none;
            top: 0;
            border: 3px solid transparent;
        }

        .call-users ul li a:hover .call-mute {
            display: block;
        }

        .call-details {
            margin: 10px 0 0px;
            display: flex;
        }

        .call-info {
            margin-left: 10px;
            width: 100%;
        }

        .call-user-details,
        .call-timing {
            display: block;
            text-overflow: ellipsis;
            overflow: hidden;
            white-space: nowrap;
        }

        .call-description {
            white-space: nowrap;
            vertical-align: bottom;
        }

        .call-timing {
            color: #727272;
            display: flex;
            font-size: 14px;
            margin-top: 1px;
            overflow: hidden;
            white-space: pre;
        }



        .content-full {
            height: 100%;
            position: relative;
            width: 100%;
        }

        .video-window .fixed-header {
            padding: 0;
            border: 0;
        }

        .video-window .fixed-header .nav>li>a {
            padding: 18px 15px;
        }


        .call-box {
            display: block;
            background: #f43b48;
            background: -moz-linear-gradient(left, #f43b48 0%, #453a94 100%);
            background: -webkit-linear-gradient(left, #f43b48 0%, #453a94 100%);
            background: -ms-linear-gradient(left, #f43b48 0%, #453a94 100%);
            background: linear-gradient(to right, #f43b48 0%, #453a94 100%);
            position: sticky;
            top: 0;
            z-index: 99;
            overflow-y: auto;
            overflow-x: hidden;
        }

        .call-box .call-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            height: calc(100vh - 60px);
            text-align: center;
        }

        .call-box .call-wrapper .call-avatar {
            margin-bottom: 50px;
            cursor: pointer;
            animation: ripple 2s infinite;
        }

        .call-box .call-wrapper .call-user {
            margin-bottom: 50px;
        }

        .call-box .call-wrapper .call-user h4 {
            color: #fff;
        }

        .call-box .call-wrapper .call-user span {
            display: block;
            color: #fff;
            font-weight: 500;
            text-align: center;
        }

        .call-box .call-wrapper .call-items {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .call-box .call-wrapper .call-items .call-item {
            background-color: rgba(255, 255, 255, 0.2);
            border: 1px solid transparent;
            border-radius: 100%;
            color: #fff;
            line-height: 0;
            margin: 0 5px;
            padding: 15px;
        }

        .call-box .call-wrapper .call-items .call-item:hover {
            opacity: 0.9;
        }

        .call-box .call-wrapper .call-items .call-item:first-child {
            margin-top: -30px;
        }

        .call-box .call-wrapper .call-items .call-item:last-child {
            margin-top: -30px;
        }

        .call-box .call-wrapper .call-items .call-item.call-end {
            padding: 20px;
            margin: 30px 20px 0;
            background: #f06060;
            border: 1px solid #f06060;
            color: #fff;
            line-height: 0;
            border-radius: 100%;
        }

        .call-box .call-wrapper .call-items .call-item.call-start {
            padding: 20px;
            margin: 30px 20px 0;
            background: #55ce63;
            border: 1px solid #55ce63;
            color: #fff;
            line-height: 0;
            border-radius: 100%;
        }

        .call-box.incoming-box .call-wrapper .call-items .call-item.call-start {
            margin: 0 10px;
        }

        .call-box.incoming-box .call-wrapper .call-items .call-item.call-end {
            margin: 0 10px;
        }

        .call-box .call-avatar {
            border-radius: 100%;
            height: 150px;
            max-width: 150px;
            min-width: 150px;
            position: relative;
            width: 100%;
        }

        .call-box .btn {
            background: rgba(0, 0, 0, 0);
            transition: all 0.3s ease 0s;
        }

        @-webkit-keyframes ripple {
            0% {
                -webkit-box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.1);
            }

            100% {
                -webkit-box-shadow: 0 0 0 50px rgba(0, 0, 0, 0);
            }
        }

        @keyframes ripple {
            0% {
                -moz-box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.1);
                box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.1);
            }

            100% {
                -moz-box-shadow: 0 0 0 50px rgba(0, 0, 0, 0);
                box-shadow: 0 0 0 50px rgba(0, 0, 0, 0);
            }
        }

        .incoming-btns {
            margin-top: 20px;
        }


        .contacts-header {
            background-color: #fff;
            border-bottom: 1px solid #eaeaea;
            padding: 10px 15px;
        }

        .contacts-header .navbar {
            border: 0 none;
            margin: 0;
            min-height: auto;
        }

        .contacts-header .user-info a {
            color: #76838f;
            text-transform: uppercase;
        }

        .contact-left {
            display: table-cell;
            height: 100%;
            float: none;
            padding: 0;
            position: static;
            vertical-align: top;
            -webkit-transition: all 0.4s ease;
            -moz-transition: all 0.4s ease;
            transition: all 0.4s ease;
            width: 100%;
        }

        .contacts-list {
            position: relative;
            padding: 0 70px 0 20px;
        }

        .contact-list {
            list-style: none;
            padding-left: 0;
            margin: 0;
        }

        .contact-list>li {
            background-color: #fff;
            border-bottom: 1px solid #eaeaea;
            border-radius: inherit;
            padding: 10px;
        }

        .contact-cont {
            position: relative;
        }

        .contact-type {
            height: 48px;
            position: absolute;
            width: 48px;
        }

        .contact-icon {
            background-color: #f3f7f9;
            border: 1px solid #e4eaec;
            border-radius: 4px;
            display: inline-block;
            height: 38px;
            line-height: 38px;
            text-align: center;
            width: 38px;
        }

        .contact-icon i {
            color: #76838f;
            font-size: 20px;
        }

        .contact-info {
            padding: 0 30px 0 50px;
        }

        .contact-action {
            height: 30px;
            list-style: none;
            padding-left: 0;
            position: absolute;
            right: 0;
            text-align: right;
            top: 10px;
            width: 30px;
        }

        .contact-date {
            color: #888;
            font-size: 12px;
        }

        .contact-author a {
            color: #1d6ad2;
            font-size: 12px;
            text-decoration: underline;
        }

        .contact-action .dropdown-menu {
            left: auto;
            right: 0;
        }

        .contact-alphapets {
            background-color: #fff;
            border-left: 1px solid #ddd;
            bottom: 0;
            height: 100%;
            overflow: hidden;
            padding-bottom: 114px;
            position: fixed;
            right: 0;
            top: 114px;
            width: 50px;
        }

        .contact-box {
            display: inline-table;
            height: 100%;
            padding: 30px 15px;
            position: relative;
            width: 100%;
        }

        .alphapets-inner {
            height: 100%;
            overflow: auto;
        }

        .alphapets-inner a {
            display: block;
            text-align: center;
            padding: 2px;
            color: #333;
        }



        .chat-sidebar {
            background-color: #fff;
            border-left: 1px solid #eaeaea;
            width: 300px;
        }

        .chat-sidebar .chat-contents {
            background-color: #fff;
        }

        .chat-sidebar .chat-left .chat-content {
            border: 0;
            padding: 0;
            border-radius: 0 !important;
            background-color: transparent;
            max-width: 100%;
        }

        .chat-sidebar .chat-left .chat-body {
            margin-left: 50px;
            padding-right: 0;
        }

        .chat-sidebar .chat-date {
            background-color: #fff;
        }

        .chat-sidebar .chats {
            padding: 15px 15px 30px;
        }

        .chat-sidebar .avatar {
            width: 30px;
            height: 30px;
            line-height: 30px;
        }

        .chat-sidebar .chat.chat-left {
            margin-bottom: 20px;
        }

        .chat-sidebar .chat.chat-left:last-child {
            margin-bottom: 0;
        }

        .chat-sidebar .chat-left .chat-time {
            color: #888;
            display: inline-block;
            font-size: 11px;
        }

        .chat-sidebar .chat-content>p {
            font-size: 13px;
            margin-bottom: 0;
        }

        .chat-sidebar.opened {
            margin-right: 0;
        }

        .apply-btn {
            background-color: rgb(59 80 244 / 57%);
            border-color: transparent;
            box-shadow: 0 6px 15px rgba(36, 37, 38, 0.08);
            color: #fff;
            position: absolute;
            right: 20px;
            top: 20px;
        }

        .job-list {
            background-color: #fff;
            border: 1px solid #ededed;
            border-radius: 4px;
            box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.2);
            display: block;
            margin-bottom: 35px;
            position: relative;
            transition: all 0.3s ease 0s;
        }

        .job-list-det {
            align-items: flex-start;
            display: flex;
            align-items: center;
            padding: 20px;
        }

        .job-list .job-list-desc {
            flex: 1 1 0;
        }

        .job-list h4.job-department {
            color: #777;
            font-size: 14px;
            margin-bottom: 0;
        }

        .job-list h3.job-list-title {
            color: #333;
            font-size: 18px;
            font-weight: 600;
            line-height: 18px;
        }

        .job-list .job-list-footer {
            background-color: #f9f9f9;
            border-radius: 0 0 4px 4px;
            position: relative;
            padding: 20px;
        }

        .job-list .job-list-footer ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .job-list .job-list-footer ul li {
            color: #777;
            display: inline-block;
            margin-right: 14px;
        }

        .job-list .job-list-footer ul li i {
            color: #777;
            margin-right: 3px;
            position: relative;
        }

        .job-list .job-list-footer ul li:last-child {
            margin-right: 0;
        }

        .page-wrapper.job-wrapper {
            margin-left: 0;
        }

        .job-types {
            background-color: transparent;
            border: 1px solid #f43b48;
            color: #f43b48;
            border-radius: 4px;
            display: inline-block;
            padding: 6px 12px;
            text-align: center;
        }



        .job-info {
            background-color: #fff;
            border: 1px solid #efefef;
            float: left;
            margin: 0 0 30px;
            padding: 30px;
            position: relative;
            width: 100%;
        }

        .job-title {
            color: #585858;
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .job-info .job-dept {
            color: #737882;
            display: block;
            font-size: 16px;
            font-weight: 500;
            margin-bottom: 20px;
        }

        .job-post-det {
            display: inline-block;
            margin-bottom: 5px;
            width: 100%;
            color: #737882;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .job-content li {
            line-height: 28px;
        }

        .job-post-det li {
            float: left;
            list-style: none;
            margin-bottom: 10px;
            margin-right: 20px;
        }

        .job-det-info {
            background-color: #fff;
            margin: 0 0 15px;
            padding: 0 0 6px;
        }

        .info-list {
            color: #888;
            padding-top: 20px;
        }

        .info-list span {
            color: #f43b48;
            float: left;
            font-size: 20px;
            line-height: 14px;
        }

        .info-list p {
            line-height: 1.7;
            margin: 0 0 0 40px;
        }

        .info-list>h5 {
            color: #585858;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 5px;
            margin-left: 40px;
            text-transform: uppercase;
        }

        .app-ends {
            color: #46cd38;
            font-size: 13px;
        }

        .job-btn {
            border: 2px solid #f43b48;
            color: #f43b48;
            display: block;
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 20px;
            padding: 15px;
            text-transform: uppercase;
            transition: all 0.3s ease 0s;
        }

        .job-btn:hover {
            background-color: #f43b48;
            color: #fff;
        }

        .job-widget {
            background-color: #fff;
            border: 1px solid #efefef;
            float: left;
            margin: 0 0 30px;
            padding: 30px;
            position: relative;
            width: 100%;
        }

        .job-desc-title h2 {
            font-size: 20px;
            margin-bottom: 0;
        }

        .job-widget h4 {
            color: #585858;
            font-size: 16px;
            font-weight: 600;
            margin: 0 0 20px;
        }

        .job-description>p {
            color: #727272;
            line-height: 28px;
        }

        .square-list {
            list-style: none;
            padding: 0;
            margin-bottom: 0;
        }

        .square-list li {
            color: #727272;
            line-height: 24px;
            list-style: none;
            margin: 10px 0 0 20px;
            position: relative;
        }

        .square-list li:first-child {
            margin-top: 0
        }

        .square-list li:before {
            font-family: fontawesome;
            margin: 0;
            position: relative;
            color: #f43b48;
            float: left;
            margin-left: -20px;
            display: block;
            content: "\f0c8";
            font-size: 8px
        }

        .text-blue {
            color: #009ce7;
        }



        .notification-list .list-group-item {
            padding: 15px;
        }

        .notification-list .status-toggle {
            float: right;
        }



        .leave-item {
            max-width: 653px;
        }

        .leave-row {
            display: flex;
            margin-bottom: 15px;
        }

        .carry-forward-itemview {
            margin-bottom: 15px;
        }

        .earned-leave-itemview {
            margin-bottom: 15px;
        }

        .leave-row .leave-left {
            flex: 1 1 auto;
        }

        .leave-row .leave-left .input-box {
            max-width: 410px;
        }

        .leave-item .form-group {
            margin-bottom: 0;
        }

        .leave-right {
            align-items: center;
            display: flex;
            flex: 0 0 200px;
            justify-content: end;
            margin-top: 31px;
            min-height: 44px;
            text-align: right;
        }

        .leave-right .btn {
            min-height: 44px;
            min-width: 75px;
        }

        .leave-right .btn+.btn {
            margin-left: 10px;
        }

        .leave-edit-btn {
            color: #216ef4;
            background-color: transparent;
            border: 0;
            padding: 0 6px;
            transition: unset;
        }

        .leave-edit-btn[disabled] {
            cursor: not-allowed;
            opacity: 0.65;
        }

        .leave-inline-form {
            align-items: center;
            display: flex;
            min-height: 44px;
        }

        .leave-header {
            align-items: center;
            color: #212536;
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .leave-header .title {
            flex: 1 1 auto;
        }

        .leave-header .leave-action {
            flex: 1 1 auto;
            text-align: right;
        }

        .leave-table .l-name {
            width: 200px;
        }

        .leave-table .l-days {
            width: 140px;
        }

        .leave-box .subtitle {
            color: #8e8e8e;
            font-size: 14px;
            font-weight: normal;
            margin: 5px auto 0 5px;
        }

        .leave-duallist {
            background-color: #f9f9f9;
            border: 1px solid #e3e3e3;
            display: block;
            padding: 15px;
        }

        .card-title.with-switch {
            display: flex;
            justify-content: space-between;
        }

        .btn.leave-delete-btn {
            font-weight: 500;
            margin-left: 10px;
            min-height: 30px;
            padding: 2px 15px;
        }

        .add-group-btn {
            display: flex;
        }

        .add-group-btn .btn {
            align-items: center;
            display: flex;
            margin-left: 10px;
        }

        .add-group-btn .btn i {
            margin-right: 5px;
        }

        .bootstrap-datetimepicker-widget table td.active,
        .bootstrap-datetimepicker-widget table td.active:hover {
            background-color: #f43b48;
            text-shadow: unset;
        }


        #loader-wrapper {
            bottom: 0;
            height: 100%;
            left: 0;
            position: fixed;
            right: 0;
            top: 0;
            width: 100%;
            z-index: 9999;
        }

        #loader {
            background-position: center center;
            background-repeat: no-repeat;
            height: 200px;
            left: 50%;
            margin: -100px 0 0 -100px;
            position: absolute;
            top: 50%;
            width: 200px;
        }

        .loader-ellips {
            font-size: 20px;
            position: relative;
            width: 64px;
            margin: 100px auto 0;
        }

        .loader-ellips__dot {
            display: block;
            width: 1em;
            height: 1em;
            border-radius: 0.5em;
            position: absolute;
            animation-duration: 0.5s;
            animation-timing-function: ease;
            animation-iteration-count: infinite;
        }

        .loader-ellips__dot:nth-child(1),
        .loader-ellips__dot:nth-child(2) {
            left: 0;
        }

        .loader-ellips__dot:nth-child(3) {
            left: 1.5em;
        }

        .loader-ellips__dot:nth-child(4) {
            left: 3em;
        }

        .loader-ellips__dot:nth-child(1) {
            animation-name: reveal;
        }

        .loader-ellips__dot:nth-child(2),
        .loader-ellips__dot:nth-child(3) {
            animation-name: slide;
        }

        .loader-ellips__dot:nth-child(4) {
            animation-name: reveal;
            animation-direction: reverse;
        }

        @keyframes reveal {
            from {
                transform: scale(0.001);
            }

            to {
                transform: scale(1);
            }
        }

        @keyframes slide {
            to {
                transform: translateX(1.5em)
            }
        }

        .loader-ellips__dot:nth-child(1) {
            background: #404040;
        }

        .loader-ellips__dot:nth-child(2) {
            background: #f43b48;
        }

        .loader-ellips__dot:nth-child(3) {
            background: #404040;
        }

        .loader-ellips__dot:nth-child(4) {
            background: #404040;
        }


        .page-menu .nav-tabs>li>a {
            font-size: 18px;
        }

        .table-radius.table {
            width: 100%;
            background: #fff;
            border-spacing: 0;
            border-radius: 0.25rem;
            margin-bottom: 0;
        }

        .table-radius.table thead td,
        .table-radius.table thead th {
            border-top: 0 none !important;
            padding: 20px !important;
        }

        .table-radius.table tbody td,
        .table-radius.table tbody th {
            padding: 15px 20px !important;
        }

        :root {
            --devdullBackGround: rgb(59 80 244 / 20%);
            --devanchorcolor: :#1E40AF;
            --devDropDownColor: #3baaf4;
        }



        .error-page {
            align-items: center;
            background-color: rgb(59 80 244 / 20%);
            color: #1f1f1f;
            display: flex;
        }

        .error-page .main-wrapper {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            width: 100%;
        }

        .error-box {
            margin: 0 auto;
            max-width: 480px;
            padding: 40px 0;
            text-align: center;
            width: 100%;
        }

        .error-box h1 {
            color: #f43b48;
            font-size: 10em;
        }

        .error-box p {
            margin-bottom: 30px;
        }

        .error-box .btn {
            border-radius: 50px;
            font-size: 18px;
            font-weight: 600;
            min-width: 200px;
            padding: 10px 20px;
        }

        .lock-user {
            margin-bottom: 20px;
            text-align: center;
        }

        .lock-user img {
            margin-bottom: 15px;
            width: 100px;
        }

        .otp-wrap {
            margin-bottom: 30px;
            text-align: center;
        }

        .otp-input {
            background-color: #fff;
            border: 1px solid #e3e3e3;
            border-radius: 4px;
            display: inline-block;
            font-size: 24px;
            font-weight: 500;
            height: 70px;
            line-height: 29px;
            margin-right: 15px;
            text-align: center;
            width: 70px;
        }

        .otp-input:last-child {
            margin-right: 0;
        }



        .settings-widget+.settings-widget {
            margin-top: 30px;
        }

        .row.row-sm {
            margin-left: -5px;
            margin-right: -5px;
        }

        .row.row-sm>div {
            padding-left: 5px;
            padding-right: 5px;
        }

        .set-btn {
            min-height: 44px;
        }



        .comp-buttons .btn {
            margin-bottom: 5px;
        }

        .comp-dropdowns .btn-group {
            margin-bottom: 5px;
        }

        .progress-example .progress {
            margin-bottom: 1.5rem;
        }

        .progress-xs {
            height: 4px;
        }

        .progress-sm {
            height: 15px;
        }

        .progress.progress-sm {
            height: 6px;
        }

        .progress.progress-md {
            height: 8px;
        }

        .progress.progress-lg {
            height: 18px;
        }

        .stickyside .sidebar-menu>ul>li>a.active {
            color: #f43b48;
        }

        .comp-section {
            margin-bottom: 30px;
            padding-bottom: 30px;
            padding-top: 30px;
        }

        .comp-section:last-child {
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .comp-section .section-title {
            font-size: 1.125rem;
            margin-bottom: 20px;
            text-decoration: underline;
            text-transform: uppercase;
        }


        .main-search {
            margin-bottom: 20px;
        }

        .search-result {
            margin-bottom: 30px;
        }

        .search-result u {
            color: #f43b48;
        }

        .search-result p {
            color: #777;
            margin-bottom: 0;
        }

        .search-lists .nav-tabs.nav-tabs-solid {
            background-color: #fff;
            border: 1px solid #e3e3e3;
        }

        .top-nav-search form {
            margin-top: 10px;
            position: relative;
            width: 230px;
        }

        .top-nav-search .form-control {
            background-color: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 50px;
            color: #fff;
            height: 40px;
            padding: 10px 50px 10px 15px;
        }

        .top-nav-search .btn {
            background-color: transparent;
            border-color: transparent;
            color: rgba(255, 255, 255, 0.7);
            min-height: 40px;
            padding: 7px 15px;
            position: absolute;
            right: 0;
            top: 0;
        }

        .top-nav-search .form-control::-webkit-input-placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .top-nav-search .form-control::-moz-placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .top-nav-search .form-control:-ms-input-placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .top-nav-search .form-control::-ms-input-placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .top-nav-search .form-control::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .responsive-search {
            display: none;
            color: #333;
            font-size: 20px;
            height: 60px;
            line-height: 60px;
            padding: 0 15px;
        }

        .top-nav-search.active form {
            display: block;
            left: 0;
            position: absolute;
        }


        .topics {
            background-color: #fff;
            border: 1px solid #ededed;
            border-radius: 4px;
            box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.2);
            margin-bottom: 30px;
            padding: 20px;
        }

        .topics .topic-title {
            color: #333;
            margin-bottom: 20px;
            padding: 0 25px 0 0;
            position: relative;
        }

        .topics .topic-title a {
            color: #333;
            font-size: 20px;
            font-weight: 500;
            text-decoration: none;
        }

        .topics .topic-title a:hover {
            color: #f43b48;
        }

        .topics .topic-title a span {
            color: #f43b48;
        }

        .topics .topic-title a i {
            color: #f43b48;
            margin-right: 5px;
        }

        .topics .topics-list {
            padding: 0;
            margin: 0;
        }

        .topics .topics-list li {
            list-style: none;
            line-height: 2;
        }

        .topics .topics-list li a {
            padding-left: 25px;
            color: #555;
            font-size: 14px;
            font-weight: 400;
            text-decoration: none;
            outline: 0 none;
        }

        .topics .topics-list li a:hover {
            color: #f43b48;
        }

        .topics .topics-list li:before {
            font-family: FontAwesome;
            content: "\f016";
            color: #555;
            font-size: 15px;
            left: 0;
            position: absolute;
            top: 0;
        }

        .topics .topics-list li {
            position: relative;
        }

        .widget {
            background-color: #fff;
            border: 1px solid #ededed;
            border-radius: 4px;
            box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.2);
            margin-bottom: 30px;
            padding: 20px;
        }

        .widget:last-child {
            margin-bottom: 0;
        }

        .widget h4 {
            color: #333;
            font-size: 18px;
            font-weight: 500;
            line-height: 25px;
        }

        .widget>ul {
            margin-bottom: 0;
            padding: 0;
            margin: 0;
        }

        .widget-category li {
            line-height: 35px;
            list-style: none;
            position: relative;
        }

        .widget-category li:before {
            font-family: FontAwesome;
            content: "\f016";
            color: #555;
            font-size: 18px;
            left: 0;
            position: absolute;
            top: 0;
        }

        .widget-category li a {
            color: #5e6977;
            padding-left: 25px;
        }

        .widget-category li a:hover {
            color: #f43b48;
        }

        .post {
            margin-bottom: 50px;
        }

        .post .meta {
            background-color: #f9f9f9;
            border: 1px solid #efefef;
            font-size: 12px;
            margin: 0 0 20px;
            padding: 10px;
        }

        .post .meta p {
            padding: 15px 0;
        }

        .post .meta li {
            display: inline-block;
            color: #86939e;
        }

        .post .meta li span {
            color: #43484d;
        }

        .post .meta li:after {
            content: "/";
            padding: 0 10px;
        }

        .post .meta li:last-child:after {
            content: none;
        }

        .post img {
            padding: 40px 0;
            max-width: 100%;
        }

        .feedback {
            background-color: #f9f9f9;
            border: 1px solid #efefef;
            padding: 20px;
            margin-bottom: 50px;
        }

        .feedback h3 {
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .feedback p:last-child {
            margin-bottom: 0;
        }

        .post .meta a {
            color: #f43b48;
        }

        .widget .widget-title i {
            color: #f43b48;
            font-size: 24px;
            margin-right: 10px;
        }

        .post h1.post-title {
            font-size: 32px;
            font-weight: 400;
            margin-bottom: 20px;
        }

        .post h2 {
            font-size: 24px;
            font-weight: 400;
        }

        .post>p {
            margin-bottom: 20px;
        }

        .comment-section {
            float: left;
            width: 100%;
        }

        .comment-section h3 {
            font-size: 24px;
            font-weight: 400;
            margin-bottom: 30px;
        }

        ul.comment-list {
            border-top: 0;
            float: left;
            list-style: none;
            margin: 0;
            padding: 0;
            width: 100%;
        }

        ul.comment-list li {
            border: 0;
            box-sizing: border-box;
            clear: both;
            float: left;
            list-style: outside none none;
            margin: 0 0 30px;
            padding: 0 0 0 70px;
            position: relative;
            width: 100%;
        }

        ul.comment-list li:last-child {
            margin-bottom: 0;
        }

        ul.comment-list li div.comment {
            border-bottom: 1px solid #ccc;
            margin-bottom: 20px;
            padding-bottom: 20px;
        }

        ul.comment-list li .comment-author {
            left: 0;
            position: absolute;
            top: 0;
            width: 100%;
        }

        ul.comment-list li .comment-author img {
            border-radius: 50px;
            float: left;
            height: 50px;
            margin: 0;
            max-height: 50px;
            max-width: 50px;
            width: 50px;
        }

        ul.comment-list li .comment-details {
            margin: 10px 0;
            padding: 0 0 10px;
            position: relative;
        }

        ul.comment-list li .author-name>a {
            color: #2f363f;
            font-size: 18px;
            font-weight: 500;
            line-height: 19px;
            text-transform: capitalize;
        }

        ul.comment-list li .author-name span {
            float: left;
            font-size: 14px;
            width: 100%;
        }

        ul.comment-list li .comment-body {
            float: left;
            margin: 10px 0 0;
            width: 100%;
        }

        ul.comment-list li .comment-body p {
            line-height: 28px;
        }

        ul.comment-list li .reply a {
            clear: both;
            color: #2f363f;
            display: inline-block;
            font-size: 15px;
            font-weight: 500;
            margin: 10px 0 0;
        }

        ul.comment-list li ul.children {
            border: 0 none;
            clear: both;
            float: left;
            margin: 10px 0;
            padding: 0;
            width: 100%;
        }

        .comment-section .comment-reply {
            float: left;
            margin-top: 30px;
            width: 100%;
        }

        .comment-reply form {
            float: left;
            margin-bottom: 20px;
            width: 100%;
        }

        .comment-reply .form-control {
            background-color: #f9f9f9;
            border: 1px solid #e7e7e7;
            border-radius: 0;
            min-height: 50px;
        }

        .comment-reply .form-control:focus {
            box-shadow: unset;
        }


        .faq-card .card-header {
            background-color: #fff;
            padding: 20px;
            position: relative;
        }

        .faq-card .card {
            border-color: #ddd;
            border-radius: 3px;
            box-shadow: none;
            margin-bottom: 20px;
            overflow: hidden;
        }

        .faq-card .card .card-header h4 {
            margin-bottom: 0;
        }

        .faq-card .card .card-header h4>a {
            color: #090909;
            display: block;
            font-size: 20px;
            font-weight: 400;
            padding-right: 60px;
            position: relative;
        }

        .faq-card .card .card-header h4>a:after {
            font-family: FontAwesome;
            font-size: 19px;
            position: absolute;
            right: 0px;
            font-weight: 400;
        }

        .faq-card .card .card-header h4>a.collapsed:after {
            content: "\f067";
        }

        .faq-card .card .card-header h4>a:not(.collapsed):after {
            content: "\f068";
        }

        .faq-card .card .card-header h4>label {
            color: #fff;
            cursor: pointer;
            display: flex;
            font-size: 24px;
            font-weight: 400;
            margin: 0;
            padding-right: 60px;
            position: relative;
        }

        .faq-card .card .card-header h4>label:after {
            font-family: FontAwesome;
            font-size: 19px;
            position: absolute;
            right: 0px;
            font-weight: 400;
            top: 0;
        }

        .faq-card .card .card-header h4>label.collapsed:after {
            content: "\f067";
        }

        .faq-card .card .card-header h4>label:not(.collapsed):after {
            content: "\f068";
        }

        .small-container {
            margin: auto;
            max-width: 1100px;
            padding: 30px;
        }

        .inner-header {
            margin-bottom: 30px;
        }



        .welcome-box {
            background-color: #fff;
            border-bottom: 1px solid #ededed;
            display: flex;
            margin: -30px -30px 30px;
            padding: 20px;
            position: relative;
        }

        .welcome-img {
            margin-right: 15px;
        }

        .welcome-img img {
            border-radius: 8px;
            width: 60px;
        }

        .welcome-det p {
            color: #777;
            font-size: 18px;
            margin-bottom: 0;
        }

        .dash-section {
            margin-bottom: 30px;
        }

        .dash-list {
            background-color: white;
            border-color: #f1f6f8;
            color: #2e424d;
            display: flex;
            margin: 10px 0 0;
        }

        .dash-card-container {
            display: flex;
            flex-direction: row;
            flex-grow: 1;
        }

        .dash-card-icon {
            align-items: center;
            display: flex;
            flex-direction: row;
            font-size: 26px;
            padding-right: 15px;
        }

        .dash-card-icon i {
            width: 30px;
        }

        .dash-card-content {
            align-items: center;
            display: flex;
            flex-direction: row;
        }

        .e-avatar {
            background-color: #fff;
            border: 3px solid #e7e7e7;
            border-radius: 50%;
            height: 45px;
            position: relative;
            width: 45px;
            margin-left: -20px;
        }

        .e-avatar:first-of-type {
            margin-left: 0 !important;
        }

        .dash-card-avatars {
            align-items: center;
            display: flex;
            flex-grow: 1;
            justify-content: flex-end;
            padding: 0 15px;
        }

        .e-avatar>img {
            border-radius: 50%;
            width: 100%;
        }

        .dash-sec-title {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        .dash-info-list .dash-card {
            background-color: #fff;
            border: 1px solid #eaeaea;
            border-radius: 8px;
            color: #575757;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
            height: auto;
            padding: 15px;
        }

        .dash-card-content p {
            font-size: 22px;
            margin-bottom: 0;
        }

        .dash-sec-content .dash-info-list+.dash-info-list {
            margin-top: 15px;
        }

        .dash-sidebar h5 {
            color: inherit;
            font-size: 13px;
            font-weight: 700;
            line-height: 1.5;
            margin-bottom: 15px;
            text-transform: uppercase;
        }

        .dash-sidebar p {
            color: #777;
            font-size: 13px;
            font-weight: 600;
            line-height: 1.5;
            margin-bottom: 0;
            text-transform: uppercase;
        }

        .dash-sidebar .card {
            border-radius: 8px;
            box-shadow: unset;
        }

        .time-list {
            display: flex;
            flex-grow: 1;
            margin-bottom: 20px;
        }

        .request-btn {
            text-align: center;
        }

        .dash-stats-list {
            align-items: center;
            display: flex;
            flex-flow: column wrap;
            flex-grow: 1;
            padding-left: 15px;
            padding-right: 15px;
        }

        .dash-stats-list+.dash-stats-list {
            border-left: 1px solid #e7e7e7;
        }

        .dash-stats-list h4 {
            color: #1f1f1f;
            font-size: 21px;
            font-weight: 700;
            line-height: 1.5;
            margin-bottom: 0;
        }



        .review-table tr {
            background-color: #fff;
        }

        .review-section {
            margin-bottom: 30px;
        }

        .review-header {
            background-color: #fff;
            border: 1px solid #dee2e6;
            margin-bottom: 0;
            padding: 15px;
            text-align: center;
        }

        .review-header h3 {
            font-size: 1.4rem;
            margin-bottom: 3px;
        }

        .review-header p {
            margin-bottom: 0;
        }

        .review-table .form-control {
            height: 36px;
        }

        .grade-span .badge {
            border-radius: 3px;
            display: inline-block;
            font-size: 13px;
            min-width: 75px;
            padding: 4px 12px;
            text-align: center;
        }

        .review-table .select2-container .select2-selection--single {
            height: 36px;
        }

        .review-table .select2-container--default .select2-selection--single .select2-selection__rendered {
            line-height: 34px;
        }

        .review-table .select2-container--default .select2-selection--single .select2-selection__arrow {
            height: 34px;
        }


        .card>.task-header {
            line-height: 15px;
            display: flex;
            justify-content: space-between;
        }

        .task-header {
            font-size: 14px;
            font-weight: 500;
            padding: 15px 15px 5px;
        }

        .task-header a {
            color: #1f1f1f;
        }

        .task-body {
            padding: 0 15px 15px;
            font-size: 13px;
        }

        .kanban-list:last-child {
            margin-right: 0;
        }

        .kanban-list>.kanban-header {
            align-items: center;
            display: flex;
            justify-content: space-between;
            padding: 10px 20px;
        }

        .kanban-list>.kanban-header>.status-title {
            color: #fff;
            font-size: 16px;
            font-weight: 500;
        }

        .kanban-list>.kanban-wrap {
            padding: 20px;
        }

        .kanban-list>.kanban-wrap>.drag-placeholder {
            height: 146px;
            -webkit-border-radius: 2px;
            border-radius: 2px;
            background-color: rgba(0, 0, 0, 0.05);
            margin-bottom: 12px;
        }

        .kanban-list>.kanban-wrap.ks-empty>.card.drop-here {
            display: block;
        }

        .kanban-list>.kanban-wrap>.card {
            border: 1px solid #e3e3e3;
            border-radius: 2px;
            box-shadow: unset;
            margin: 0 0 12px;
        }

        .kanban-list>.kanban-wrap>.card.drop-here {
            display: none;
            text-align: center;
            background: transparent;
            padding: 15px;
            border-style: dashed;
        }

        .kanban-list>.kanban-wrap>.card.drop-here>a {
            color: #333;
            font-weight: 500;
        }

        .kanban-list>.kanban-wrap>.card:last-child {
            margin-bottom: 0;
        }

        .kanban-list>.kanban-wrap>.card.ui-sortable-helper {
            box-shadow: 0 2px 20px 0 #d7dceb;
        }

        .kanban-list>.kanban-wrap>.card>.task-header {
            font-size: 14px;
            font-weight: 500;
            border: none;
            padding: 15px 15px 5px;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .kanban-list>.kanban-wrap>.card>.task-body {
            padding: 0 15px 15px;
        }

        .kanban-list>.kanban-wrap>.card>.kanban-box>.task-body>.kanban-info {
            display: flex;
            align-items: center;
            font-size: 12px;
        }

        .kanban-list>.kanban-wrap>.card>.kanban-box>.task-body>.kanban-info>.progress {
            margin-bottom: 0;
            margin-right: 10px;
            width: 100%;
        }

        .kanban-list>.kanban-wrap>.card>.kanban-box>.task-body>.kanban-info>.progress .progress-bar {
            background-color: #42a5f5;
        }

        .kanban-list>.kanban-wrap>.card>.kanban-box>.task-body>.kanban-footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 12px;
            margin-top: 10px;
        }

        .kanban-list>.kanban-wrap>.card>.kanban-box>.task-body>.kanban-footer .ks-icon {
            color: #d7dceb;
            font-size: 20px;
            display: inline-block;
            margin-right: 3px;
            position: relative;
            top: 1px;
        }

        .kanban-list>.kanban-wrap>.card>.kanban-box>.task-body>.kanban-footer>.task-users>.task-avatar>img {
            width: 24px;
            height: 24px;
        }

        .kanban-list>.kanban-wrap>.card>.kanban-box>.task-body>.kanban-footer>.task-users>.ks-amount {
            font-size: 10px;
            font-weight: 500;
            display: inline-block;
            margin-left: 3px;
            position: relative;
            top: 1px;
        }

        .kanban-list.kanban-danger {
            background-color: #fef7f6;
        }

        .kanban-list.kanban-danger>.kanban-header {
            background-color: #ef5350;
        }

        .kanban-list.kanban-danger>.kanban-wrap>.card.drop-here {
            border-color: #f7c1b7;
        }

        .kanban-list.kanban-danger>.kanban-wrap>.card>.kanban-box>.task-body>.kanban-info>.progress .progress-bar {
            background-color: #ef5350;
        }

        .kanban-list.kanban-success {
            background-color: #edf7ee;
        }

        .kanban-list.kanban-success>.kanban-header {
            background-color: #4caf50;
        }

        .kanban-list.kanban-success>.kanban-wrap>.card.drop-here {
            border-color: #abebc6;
        }

        .kanban-list.kanban-success>.kanban-wrap>.card>.kanban-box>.task-body>.kanban-info>.progress .progress-bar {
            background-color: #4caf50;
        }

        .kanban-list.kanban-info {
            background-color: #e7f3fe;
        }

        .kanban-list.kanban-info>.kanban-header {
            background-color: #42a5f5;
        }

        .kanban-list.kanban-info>.kanban-wrap>.card.drop-here {
            border-color: #a6dbf9;
        }

        .kanban-list.kanban-warning {
            background-color: #fdfcf3;
        }

        .kanban-list.kanban-warning>.kanban-header {
            background-color: #ffb300;
        }

        .kanban-list.kanban-warning>.kanban-wrap>.card.drop-here {
            border: 1px solid #f2e49e;
        }

        .kanban-list.kanban-warning>.kanban-wrap>.card>.kanban-box>.task-body>.kanban-info>.progress .progress-bar {
            background-color: #ffb300;
        }

        .task-avatar {
            border-radius: 50%;
            position: relative;
        }

        .kanban-box.ui-sortable-handle {
            cursor: move;
        }

        .card>.task-board-header {
            line-height: 15px;
            display: flex;
            justify-content: space-between;
        }

        .task-board-header {
            font-size: 14px;
            font-weight: 500;
            padding: 15px 15px 5px;
            display: flex;
            justify-content: space-between;
        }

        .task-board-header a {
            color: #1f1f1f;
        }

        .task-board-body {
            padding: 0 15px 15px;
            font-size: 13px;
        }

        .progress>.progress-bar {
            background-color: #25628F;
        }

        .kanban-cont {
            display: flex;
            overflow: auto;
            padding-bottom: 20px;
        }

        .kanban-list {
            align-self: flex-start;
            margin-right: 30px;
            min-width: 300px;
            width: 300px;
        }

        .kanban-list:last-child {
            margin-right: 0;
        }

        .kanban-list>.kanban-header {
            align-items: center;
            display: flex;
            justify-content: space-between;
            padding: 10px 20px;
        }

        .kanban-list>.kanban-header>.status-title {
            color: #fff;
            font-size: 16px;
            font-weight: 500;
        }

        .kanban-list>.kanban-wrap {
            padding: 20px;
        }

        .kanban-list>.kanban-wrap>.drag-placeholder {
            height: 146px;
            -webkit-border-radius: 2px;
            border-radius: 2px;
            background-color: rgba(0, 0, 0, 0.05);
            margin-bottom: 12px;
        }

        .kanban-list>.kanban-wrap>.card {
            background-color: #fff;
            border: 1px solid #e3e3e3;
            border-radius: 2px;
            box-shadow: unset;
            margin: 0 0 12px;
        }

        .kanban-list>.kanban-wrap>.card.active {
            box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.3);
        }

        .kanban-list>.kanban-wrap>.card:last-child {
            margin-bottom: 0;
        }

        .kanban-list>.kanban-wrap>.card.ui-sortable-helper {
            box-shadow: 0 2px 20px 0 #d7dceb;
        }

        .kanban-list>.kanban-wrap>.card>.task-board-header {
            font-size: 14px;
            font-weight: 500;
            border: none;
            padding: 15px 15px 5px;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .kanban-list>.kanban-wrap>.card>.task-board-body {
            padding: 0 15px 15px;
        }

        .kanban-list>.kanban-wrap>.card>.kanban-box>.task-board-body>.kanban-info {
            display: flex;
            align-items: center;
            font-size: 12px;
        }

        .kanban-list>.kanban-wrap>.card>.kanban-box>.task-board-body>.kanban-info>.progress {
            margin-bottom: 0;
            margin-right: 10px;
            width: 100%;
        }

        .kanban-list>.kanban-wrap>.card>.kanban-box>.task-board-body>.kanban-info>.progress .progress-bar {
            background-color: #42a5f5;
        }

        .kanban-list>.kanban-wrap>.card>.kanban-box>.task-board-body>.kanban-footer {
            display: flex;
            justify-content: space-between;
            font-size: 12px;
            margin-top: 10px;
            align-items: end;
        }

        .kanban-list>.kanban-wrap>.card>.kanban-box>.task-board-body>.kanban-footer>.task-users>.task-avatar>img {
            width: 24px;
            height: 24px;
        }

        .kanban-list>.kanban-wrap>.card>.kanban-box>.task-board-body>.kanban-footer>.task-users>.task-user-count {
            font-size: 10px;
            font-weight: 500;
            display: inline-block;
            margin-left: 3px;
            position: relative;
            top: 1px;
        }

        .kanban-list.kanban-danger>.kanban-wrap>.card.active {
            border-color: #ef5350;
        }

        .kanban-list.kanban-success>.kanban-wrap>.card.active {
            border-color: #4caf50;
        }

        .kanban-list.kanban-info>.kanban-wrap>.card.active {
            border-color: #42a5f5;
        }

        .kanban-list.kanban-warning>.kanban-wrap>.card.active {
            border-color: #ffb300;
        }

        .kanban-list.kanban-danger {
            background-color: #fef7f6;
        }

        .kanban-list.kanban-danger>.kanban-header {
            background-color: #ef5350;
        }

        .kanban-list.kanban-danger>.kanban-wrap>.card>.kanban-box>.task-board-body>.kanban-info>.progress .progress-bar {
            background-color: #ef5350;
        }

        .kanban-list.kanban-success {
            background-color: #edf7ee;
        }

        .kanban-list.kanban-success>.kanban-header {
            background-color: #4caf50;
        }

        .kanban-list.kanban-success>.kanban-wrap>.card>.kanban-box>.task-board-body>.kanban-info>.progress .progress-bar {
            background-color: #4caf50;
        }

        .kanban-list.kanban-info {
            background-color: #e7f3fe;
        }

        .kanban-list.kanban-info>.kanban-header {
            background-color: #42a5f5;
        }

        .kanban-list.kanban-warning {
            background-color: #fdfcf3;
        }

        .kanban-list.kanban-warning>.kanban-header {
            background-color: #ffb300;
        }

        .kanban-list.kanban-warning>.kanban-wrap>.card>.kanban-box>.task-board-body>.kanban-info>.progress .progress-bar {
            background-color: #ffb300;
        }

        .kanban-list.kanban-purple {
            background-color: #f1effd;
        }

        .kanban-list.kanban-purple>.kanban-header {
            background-color: #7460ee;
        }

        .kanban-list.kanban-purple>.kanban-wrap>.card>.kanban-box>.task-board-body>.kanban-info>.progress .progress-bar {
            background-color: #7460ee;
        }

        .kanban-list.kanban-primary {
            background-color: #fff5ec;
        }

        .kanban-list.kanban-primary>.kanban-header {
            background-color: #ff9b44;
        }

        .kanban-list.kanban-primary>.kanban-wrap>.card>.kanban-box>.task-board-body>.kanban-info>.progress .progress-bar {
            background-color: #ff9b44;
        }

        .task-avatar {
            border-radius: 50%;
            position: relative;
        }

        .kanban-box.ui-sortable-handle {
            cursor: move;
        }

        .kanban-action>a {
            color: #fff;
            background-color: rgba(0, 0, 0, 0.3);
            display: inline-flex;
            align-items: center;
            width: 22px;
            height: 22px;
            border-radius: 50%;
            justify-content: center;
        }

        .task-board-color .board-color-list {
            display: flex;
            height: 45px;
        }

        .task-board-color .board-color-list .board-control {
            position: relative;
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            min-height: 1.5rem;
            padding-left: 1.5rem;
            margin-right: 1rem;
            cursor: pointer;
            padding-left: 0;
            cursor: pointer;
            width: 36px;
            height: 36px;
        }

        .task-board-color .board-control-input {
            position: absolute;
            z-index: -1;
            opacity: 0;
        }

        .board-control>.board-control-input:checked~.board-indicator:before {
            content: "\f00c";
            display: block;
            width: 16px;
            height: 16px;
            -webkit-border-radius: 2px;
            border-radius: 2px;
            color: #fff;
            border: none;
            position: relative;
            font-family: FontAwesome;
            text-align: center;
            line-height: 16px;
        }

        .board-control>.board-control-input:checked~.board-indicator::before {
            width: 36px;
            height: 36px;
            line-height: 36px;
        }

        .board-control>.board-indicator {
            width: 36px;
            height: 36px;
        }

        .board-control.board-primary>.board-indicator {
            background: #ff9b44;
        }

        .board-control.board-success>.board-indicator {
            background: #4caf50;
        }

        .board-control.board-info>.board-indicator {
            background: #42a5f5;
        }

        .board-control.board-purple>.board-indicator {
            background: #7460ee;
        }

        .board-control.board-warning>.board-indicator {
            background: #ffb300;
        }

        .board-control.board-danger>.board-indicator {
            background: #ef5350;
        }

        .kanban-board.task-wrapper .kanban-list {
            width: 100%;
        }

        .board-view-header {
            margin-bottom: 30px;
        }

        .pro-teams {
            display: inline-flex;
            margin-right: 15px;
            text-align: center;
            margin-bottom: 20px;
        }

        .pro-teams .pro-team-members {
            margin-left: 15px;
            display: flex;
            align-items: center;
        }

        .pro-teams h4 {
            margin-bottom: 0;
            margin-right: 6px;
            font-size: 16px;
        }

        .pro-team-lead {
            display: flex;
            align-items: center;
        }

        .board-view-header .view-icons {
            float: right;
            margin-right: 0;
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 2px 7px;
            border-radius: 4px;
        }

        .board-view-header .view-icons .btn {
            margin: 0;
            padding: 0;
        }

        .board-view-header .view-icons a.btn+a.btn {
            margin-left: 5px;
        }

        .pro-progress-bar {
            display: flex;
            align-items: center;
        }

        .pro-progress-bar h4 {
            margin-bottom: 0;
            margin-right: 10px;
            font-size: 13px;
            text-transform: uppercase;
        }

        .pro-progress-bar .progress {
            width: 100%;
            margin-bottom: 0;
            margin-right: 10px;
            height: 15px;
            background-color: #e3e3e3;
            box-shadow: unset;
        }

        .pro-progress-bar .progress>.progress-bar {
            background-color: #ff9b44;
        }

        .pro-teams .avatar-group {
            display: inline-flex;
        }

        .pro-teams .avatar-group .avatar {
            margin-right: 0;
            position: relative;
            display: inline-block;
            width: 34px;
            height: 34px;
            background-color: transparent;
        }

        .pro-teams .avatar-group .avatar+.avatar {
            margin-left: -.75rem;
        }

        .pro-teams .avatar-group .avatar .border {
            border: 3px solid #fff !important;
        }

        .pro-teams .avatar-group .avatar>img {
            width: 100%;
            height: 100%;
            -o-object-fit: cover;
            object-fit: cover;
            border-radius: 50%;
        }

        .border-white {
            border-color: #fff !important;
        }

        .pro-teams .avatar-group .avatar:hover {
            z-index: 1;
        }

        .pro-teams .avatar .avatar-title {
            font-size: 14px;
            border-radius: 50%;
        }

        .pro-teams .avatar-title {
            width: 100%;
            height: 100%;
            background-color: #ff9b44;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .task-date {
            display: block;
        }

        .task-priority {
            padding: .3em .6em .3em;
        }

        .task-follower-list {
            display: flex;
            margin-top: 15px;
        }

        .task-follower-list span {
            position: relative;
        }

        .task-follower-list span i {
            cursor: pointer;
            position: absolute;
            top: -5px;
            right: 5px;
            color: #f00;
        }

        .add-new-task {
            text-align: center;
            padding: 0 20px 20px;
        }

        .add-new-task a {
            color: #333;
            font-size: 14px;
        }

        .project-add-form {
            display: none;
            margin-top: 10px;
        }

        .project-add-form.opened {
            display: block;
        }

        #myOverviewDiv {
            position: absolute;
            width: 200px;
            height: 100px;
            top: 10px;
            left: 10px;
            background-color: #f2f2f2;
            z-index: 300;

            border: solid 1px #7986cb;
        }


        .wday-box input {
            opacity: 0;
        }

        .wday-box .checkmark {
            border: 2px solid #ff9b44;
            width: 40px;
            height: 40px;
            line-height: 35px;
            padding-left: 13px !important;
            color: #ff9b44;
            display: block;
        }

        .wday-box input:checked~.checkmark {
            background: #ff9b44;
            color: #fff;
        }

        .table-responsive {
            white-space: nowrap;
        }

        .user-add-shedule-list a {
            display: inline-block;
            padding: 10px;
            border: 1px dashed #a7a7a7;
            color: #a7a7a7;
            border-radius: 5px;
        }

        .user-add-shedule-list h2 a {
            border: 2px dashed #1EB53A;
            padding: 10px;
            color: #1EB53A;
        }

        .user-add-shedule-list span {
            justify-content: center;
            display: flex;
        }

        .file-wrap {
            border: 1px solid #e0e3e4;
            display: flex;
            flex-wrap: wrap;
            position: relative;
        }

        .file-wrap .file-sidebar {
            border-right: 1px solid #e0e3e4;
            left: 0;
            position: absolute;
            z-index: 5;
            width: 300px;
            transition: 0.3s ease-in-out;
        }

        .file-wrap .file-sidebar .file-header {
            align-items: center;
            background-color: #fff;
            border-bottom: 1px solid #e0e3e4;
            color: #324148;
            display: flex;
            height: 72px;
            justify-content: space-between;
            padding: 0 15px;
        }

        .file-wrap .file-sidebar .file-header span {
            font-size: 20px;
            font-weight: 600;
            text-transform: capitalize;
        }

        .file-wrap .file-sidebar .file-search {
            background-color: #f5f5f6;
            border-bottom: 1px solid #e5e5e5;
            padding: 10px 15px;
            width: 100%;
        }

        .file-wrap .file-sidebar .file-search .input-group {
            width: 100%;
        }

        .file-wrap .file-sidebar .file-search .input-group .form-control {
            background-color: #fff;
            border-radius: 50px;
            padding-left: 36px;
        }

        .file-wrap .file-sidebar .file-search .input-group .form-control:focus {
            border-color: #ccc;
            box-shadow: none;
        }

        .file-wrap .file-sidebar .file-search .input-group .input-group-prepend {
            align-items: center;
            bottom: 0;
            color: #666;
            display: flex;
            left: 15px;
            pointer-events: none;
            position: absolute;
            top: 0;
            z-index: 4;
        }

        .file-wrap .file-scroll {
            max-height: calc(100vh - 259px);
            min-height: 497px;
            overflow-y: auto;
        }

        .file-wrap .file-sidebar .file-pro-list {
            background-color: #fff;
            padding: 15px;
        }

        .file-side-close {
            display: none;
            background-color: #eee;
            border: 1px solid #e3e3e3;
            border-radius: 24px;
            color: #bbb;
            font-size: 14px;
            line-height: 24px;
            min-height: 26px;
            text-align: center;
            width: 26px;
            position: absolute;
            right: 15px;
        }

        .file-wrap .file-content {
            flex: 0 0 100%;
            max-width: 100%;
        }

        .file-wrap .file-content .file-header {
            align-items: center;
            background-color: #fff;
            border-bottom: 1px solid #e0e3e4;
            display: flex;
            height: 72px;
            justify-content: space-between;
            padding: 0 15px;
        }

        .file-wrap .file-content .file-body {
            background-color: #f5f5f6;
        }

        .dropdown-file {
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .dropdown-file .dropdown-link {
            color: #777;
            width: 24px;
            height: 24px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .dropdown-file .dropdown-link:hover,
        .dropdown-file .dropdown-link:focus {
            color: #1b2e4b;
        }

        .dropdown-file .dropdown-item {
            font-size: 12px;
            display: flex;
            align-items: center;
            padding: 5px 10px;
        }

        .card-file {
            padding: 10px;
            position: relative;
            transition: all 0.2s ease-in-out;
        }

        .card-file:hover,
        .card-file:focus {
            border-color: #ccc;
        }

        .card-file .card-body {
            padding: 15px 0 0;
        }

        .card-file .card-footer {
            font-size: 11px;
            color: #a9a9a9;
            padding: 10px 0 0;
            border-top-width: 0;
            background-color: transparent;
        }

        .card-file h6 {
            margin-bottom: 0;
            font-size: 0.875rem;
        }

        .card-file h6 a {
            white-space: nowrap;
            text-overflow: ellipsis;
            overflow: hidden;
            display: block;
            width: 100%;
            color: #333;
        }

        .card-file span {
            font-size: 12px;
            color: #888;
        }

        .card-file-thumb {
            align-items: center;
            background-color: #f5f5f5;
            color: #777;
            display: flex;
            font-size: 48px;
            height: 120px;
            justify-content: center;
        }

        .file-wrap .file-content .file-body .file-content-inner {
            padding: 15px;
            width: 100%;
        }

        .file-wrap.file-sidebar-toggle .file-sidebar {
            left: -331px;
        }

        .file-wrap.file-sidebar-toggle .file-cont-wrap {
            margin-left: 0;
        }

        .file-wrap .file-cont-wrap {
            display: flex;
            flex-wrap: wrap;
            margin-left: 300px;
            transition: 0.4s ease-in-out;
        }

        .file-wrap .file-cont-wrap .file-cont-inner {
            flex: 0 0 100%;
            max-width: 100%;
        }

        .file-wrap .file-cont-wrap .file-cont-inner .file-cont-header {
            align-items: center;
            background: #fff;
            border-bottom: 1px solid #e0e3e4;
            display: flex;
            height: 72px;
            justify-content: space-between;
            padding: 0 15px;
        }

        .file-wrap .file-cont-wrap .file-cont-inner .file-cont-header>span {
            color: #333;
            font-size: 20px;
            font-weight: 600;
        }

        .file-wrap .file-cont-wrap .file-cont-inner .file-cont-header .file-sidebar-toggle {
            color: #333;
        }

        .file-wrap .file-cont-wrap .file-cont-inner .file-cont-header .file-options {
            display: flex;
        }

        .file-wrap .file-cont-wrap .file-cont-inner .file-cont-header .file-options>a,
        .file-wrap .file-cont-wrap .file-cont-inner .file-cont-header .file-options>span {
            color: #333;
            display: inline-block;
            font-size: 20px;
            margin-left: 25px;
        }

        .file-wrap .file-cont-wrap .file-cont-inner .file-cont-header .file-options>a:first-child,
        .file-wrap .file-cont-wrap .file-cont-inner .file-cont-header .file-options>span:first-child {
            margin-left: 0;
        }

        .file-wrap .file-content .file-search {
            background-color: #f5f5f6;
            border-bottom: 1px solid #e5e5e5;
            padding: 10px 15px;
            width: 100%;
        }

        .file-wrap .file-content .file-search .input-group {
            width: 100%;
        }

        .file-wrap .file-content .file-search .input-group .form-control {
            background-color: #fff;
            border-radius: 50px;
            padding-left: 36px;
        }

        .file-wrap .file-content .file-search .input-group .form-control:focus {
            border-color: #ccc;
            box-shadow: none;
        }

        .file-wrap .file-content .file-search .input-group .input-group-prepend {
            align-items: center;
            bottom: 0;
            color: #666;
            display: flex;
            left: 15px;
            pointer-events: none;
            position: absolute;
            top: 0;
            z-index: 4;
        }

        .btn-file {
            display: inline-block;
            overflow: hidden;
            position: relative;
            vertical-align: middle;
        }

        .btn-file input {
            cursor: pointer;
            direction: ltr;
            filter: alpha(opacity=0);
            font-size: 23px;
            height: 100%;
            margin: 0;
            opacity: 0;
            position: absolute;
            right: 0;
            top: 0;
            width: 100%;
        }

        .file-menu {
            display: inline-block;
            margin: 0 0 10px;
            padding: 0;
            width: 100%;
        }

        .file-menu li {
            display: inline-block;
            width: 100%;
        }

        .file-menu li+li {
            margin-top: 2px;
        }

        .file-menu li a {
            color: #333;
            display: inline-block;
            padding: 10px 15px;
            width: 100%;
            text-transform: capitalize;
            -webkit-transition: 0.3s ease;
            -moz-transition: 0.3s ease;
            transition: 0.3s ease;
        }

        .file-menu li a i {
            font-size: 16px;
            padding-right: 10px;
            color: #878787;
        }

        .file-menu li a:hover,
        .file-menu li.active a,
        .file-menu li a:focus {
            background: rgba(33, 33, 33, 0.05);
        }

        .show-more {
            text-align: center;
        }

        .show-more a {
            position: relative;
            padding: 0 20px 0 15px;
        }

        .show-more a:before {
            content: '\f107';
            top: 50%;
            right: 0;
            position: absolute;
            font-size: 18px;
            line-height: inherit;
            font-family: 'FontAwesome';
            transform: translateY(-50%);
        }



        .pricing-box {
            text-align: center;
        }

        .pricing-box ul {
            list-style: none;
            margin: 0;
            padding: 0;
            text-align: left;
        }

        .pricing-box ul li {
            line-height: 35px;
        }

        .pricing-box ul li i {
            color: #00bf6f;
            margin-right: 5px;
        }

        .equal-height-cards>div>div.card {
            height: 100%;
        }

        .mb-30 {
            margin-bottom: 30px !important;
        }



        @media only screen and (min-width: 991px) {
            #toggle_btn {
                color: #999;
                float: left;
                font-size: 26px;
                line-height: 60px;
                padding: 0 10px;
            }

            .mini-sidebar .header-left .logo img {
                height: auto;
                max-height: 30px;
                width: auto;
            }

            .mini-sidebar .header .header-left {
                padding: 0 5px;
                width: 60px;
            }

            .mini-sidebar .sidebar {
                width: 60px;
            }

            .mini-sidebar.expand-menu .sidebar {
                width: 230px;
            }

            .mini-sidebar .menu-title {
                visibility: hidden;
                white-space: nowrap;
            }

            .mini-sidebar.expand-menu .menu-title {
                visibility: visible;
            }

            .mini-sidebar .menu-title a {
                visibility: hidden;
            }

            .mini-sidebar.expand-menu .menu-title a {
                visibility: visible;
            }

            .mini-sidebar .sidebar .noti-dot:before {
                display: none;
            }

            .mini-sidebar .sidebar .noti-dot:after {
                display: none;
            }

            .mini-sidebar.expand-menu .sidebar .noti-dot:before {
                display: block;
            }

            .mini-sidebar.expand-menu .sidebar .noti-dot:after {
                display: block;
            }

            .modal-open.mini-sidebar .sidebar {
                z-index: 1001;
            }

            .mini-sidebar .sidebar .sidebar-menu ul>li>a span {
                display: none;
                transition: all 0.2s ease-in-out;
                opacity: 0;
            }

            .mini-sidebar .sidebar .sidebar-menu ul>li>a span.chat-avatar-sm {
                display: inline-block;
                opacity: 1;
            }

            .mini-sidebar .sidebar .sidebar-menu ul>li>a span.status {
                display: inline-block;
                opacity: 1;
            }

            .mini-sidebar.expand-menu .sidebar .sidebar-menu ul>li>a span {
                display: inline;
                opacity: 1;
            }

            .mini-sidebar .sidebar .sidebar-menu>ul>li>a i {
                font-size: 30px;
                width: 30px;
            }

            .mini-sidebar.expand-menu .sidebar .sidebar-menu>ul>li>a i {
                font-size: 24px;
                width: 20px;
            }

            .mini-sidebar .page-wrapper {
                margin-left: 60px;
            }
        }

        @media only screen and (min-width: 768px) {
            .modal-md {
                width: 600px;
            }

            .nav-tabs.nav-justified.nav-tabs-top {
                border-bottom: 1px solid #ddd;
            }

            .nav-tabs.nav-justified.nav-tabs-top>li>a,
            .nav-tabs.nav-justified.nav-tabs-top>li>a:hover,
            .nav-tabs.nav-justified.nav-tabs-top>li>a:focus {
                border-width: 2px 0 0 0;
            }

            .nav-tabs.nav-tabs-top>li {
                margin-bottom: 0;
            }

            .nav-tabs.nav-tabs-top>li>a,
            .nav-tabs.nav-tabs-top>li>a:hover,
            .nav-tabs.nav-tabs-top>li>a:focus {
                border-width: 2px 0 0 0;
            }

            .nav-tabs.nav-tabs-top>li.open>a,
            .nav-tabs.nav-tabs-top>li>a:hover,
            .nav-tabs.nav-tabs-top>li>a:focus {
                border-top-color: #ddd;
            }

            .nav-tabs.nav-tabs-top>li+li>a {
                margin-left: 1px;
            }

            .nav-tabs.nav-tabs-top>li>a.active,
            .nav-tabs.nav-tabs-top>li>a.active:hover,
            .nav-tabs.nav-tabs-top>li>a.active:focus {
                border-top-color: #f43b48;
            }

            .nav-tabs.nav-tabs-bottom>li {
                margin-bottom: -1px;
            }

            .nav-tabs.nav-tabs-bottom>li>a.active,
            .nav-tabs.nav-tabs-bottom>li>a.active:hover,
            .nav-tabs.nav-tabs-bottom>li>a.active:focus {
                border-bottom-width: 2px;
                border-color: transparent;
                border-bottom-color: #f43b48;
                background-color: transparent;
                transition: none 0s ease 0s;
                -moz-transition: none 0s ease 0s;
                -o-transition: none 0s ease 0s;
                -ms-transition: none 0s ease 0s;
                -webkit-transition: none 0s ease 0s;
            }

            .nav-tabs.nav-tabs-solid {
                background-color: #fafafa;
                border: 0;
            }

            .nav-tabs.nav-tabs-solid>li {
                margin-bottom: 0;
            }

            .nav-tabs.nav-tabs-solid>li>a {
                border-color: transparent;
            }

            .nav-tabs.nav-tabs-solid>li>a:hover,
            .nav-tabs.nav-tabs-solid>li>a:focus {
                background-color: #f5f5f5;
            }

            .nav-tabs.nav-tabs-solid>.open:not(.active)>a {
                background-color: #f5f5f5;
                border-color: transparent;
            }

            .nav-tabs-justified.nav-tabs-top {
                border-bottom: 1px solid #ddd;
            }

            .nav-tabs-justified.nav-tabs-top>li>a,
            .nav-tabs-justified.nav-tabs-top>li>a:hover,
            .nav-tabs-justified.nav-tabs-top>li>a:focus {
                border-width: 2px 0 0 0;
            }
        }

        @media only screen and (max-width: 1199.98px) {
            .page-title-box {
                display: none;
            }

            .file-wrap .file-sidebar {
                left: -331px;
            }

            .file-wrap .file-cont-wrap {
                margin-left: 0;
            }

            .file-wrap.file-sidebar-toggle .file-sidebar {
                left: 0;
            }

            .file-wrap.file-sidebar-toggle .file-cont-wrap {
                margin-left: 0;
            }

            .file-side-close {
                display: inline-block;
            }
        }

        @media only screen and (max-width: 991.98px) {
            .profile-rightbar {
                display: inline-block !important;
            }

            .profile-info-left {
                border-right: none;
                border-bottom: 2px dashed #ccc;
                margin-bottom: 20px;
                padding-bottom: 20px;
            }

            .task-right-sidebar .task-chat-view {
                display: block;
                position: fixed;
                right: 0;
                -webkit-transition: all 0.4s ease;
                -moz-transition: all 0.4s ease;
                transition: all 0.4s ease;
                margin-right: 0;
            }

            .task-chat-view {
                display: none;
                -webkit-transition: all 0.4s ease;
                -moz-transition: all 0.4s ease;
                transition: all 0.4s ease;
                right: 0;
                transform: translateX(0px);
                z-index: 1041;
                width: 300px;
                position: fixed;
                transition: all 0.4s ease 0s;
                margin-right: -300px;
                display: table-cell;
                top: 0;
                padding-bottom: 60px;
                margin-top: 60px;
            }

            .chat-profile-view {
                display: none;
                -webkit-transition: all 0.4s ease;
                -moz-transition: all 0.4s ease;
                transition: all 0.4s ease;
                right: 0;
                transform: translateX(0px);
                z-index: 1041;
                width: 300px;
                position: fixed;
                transition: all 0.4s ease 0s;
                margin-right: -300px;
                display: table-cell;
                top: 0;
                padding-bottom: 60px;
                margin-top: 60px;
            }

            .message-view.task-view {
                width: 100%;
            }

            .float-left.ticket-view-details {
                width: 90%;
            }

            .chat-main-row {
                left: 0;
            }

            .header .header-left {
                position: absolute;
                width: 100%;
            }

            .mobile_btn {
                display: block;
            }

            .page-title-box {
                display: none;
            }

            .sidebar {
                margin-left: -225px;
                width: 225px;
                -webkit-transition: all 0.4s ease;
                -moz-transition: all 0.4s ease;
                transition: all 0.4s ease;
                z-index: 1041;
            }

            .page-wrapper {
                margin-left: 0;
                padding-left: 0;
                padding-right: 0;
            }

            a.mobile_btn {
                color: #fff;
                font-size: 24px;
                height: 60px;
                left: 0;
                line-height: 60px;
                padding: 0 20px;
                position: absolute;
                top: 0;
                width: 60px;
                z-index: 10;
            }

            #toggle_btn {
                display: none;
            }

            .page-wrapper {
                -webkit-transition: all 0.4s ease;
                -moz-transition: all 0.4s ease;
                transition: all 0.4s ease;
            }

            .responsive-search {
                color: #fff;
                display: inline-block;
            }

            .top-nav-search form {
                display: none;
            }

            .top-nav-search .form-control {
                background-color: #fff;
                border-color: #e3e3e3;
                color: #333;
            }

            .top-nav-search .btn {
                color: #999;
            }

            .top-nav-search .form-control::-webkit-input-placeholder {
                color: #999;
            }

            .top-nav-search .form-control::-moz-placeholder {
                color: #999;
            }

            .top-nav-search .form-control:-ms-input-placeholder {
                color: #999;
            }

            .top-nav-search .form-control::-ms-input-placeholder {
                color: #999;
            }

            .top-nav-search .form-control::placeholder {
                color: #999;
            }

            .header .has-arrow .dropdown-toggle>span:nth-child(2) {
                display: none;
            }

            .header .has-arrow .dropdown-toggle::after {
                display: none;
            }
        }

        @media only screen and (max-width: 767.98px) {
            body {
                font-size: 0.875rem;
            }

            h1,
            .h1 {
                font-size: 2rem;
            }

            h2,
            .h2 {
                font-size: 1.75rem;
            }

            h3,
            .h3 {
                font-size: 1.375rem;
            }

            h4,
            .h4 {
                font-size: 1rem;
            }

            h5,
            .h5 {
                font-size: 0.9375rem;
            }

            h6,
            .h6 {
                font-size: 0.75rem;
            }

            .page-title,
            .dash-widget-info>h3,
            .account-title {
                font-size: 1.5rem;
            }

            .dash-card-content p,
            .stats-info h4,
            .account-box .account-btn,
            .job-title {
                font-size: 1.25rem;
            }

            .card-title,
            .dash-stats-list h4,
            .custom-modal .modal-title,
            .file-wrap .file-cont-wrap .file-cont-inner .file-cont-header>span,
            .faq-card .card .card-header h4>a,
            .lead {
                font-size: 1.125rem;
            }

            .btn,
            .welcome-det p,
            .kanban-list>.kanban-header>.status-title,
            .account-box label,
            .job-info .job-dept,
            .form-focus .focus-label {
                font-size: 0.9375rem;
            }

            .onoffswitch-inner::before,
            .onoffswitch-inner::after,
            .form-control,
            .user-menu.nav>li>a,
            .page-header .breadcrumb {
                font-size: 0.875rem;
            }

            .btn-group-sm>.btn,
            .btn-sm {
                font-size: 0.8125rem;
            }

            .comp-section .section-title,
            .voice-call-avatar .username,
            .page-menu .nav-tabs>li>a,
            .btn-group-lg>.btn,
            .btn-lg,
            .account-subtitle,
            .job-list h3.job-list-title {
                font-size: 1rem;
            }

            .message-content {
                font-size: 0.75rem;
            }

            .user-menu.nav>li>a {
                padding: 0 10px;
            }

            .top-nav-search form {
                width: 210px;
            }

            .profile-info-left {
                border-right: none;
                border-bottom: 2px dashed #ccc;
                margin-bottom: 20px;
                padding-bottom: 20px;
            }

            .navbar-nav .open .dropdown-menu {
                float: left;
                position: absolute;
            }

            .notifications {
                right: -48px;
            }

            .notifications::before,
            .notifications::after {
                right: 60px;
            }

            .header {
                z-index: 1040;
            }

            .task-wrapper #task-list li .task-container .task-label {
                padding-right: 50px;
                word-break: unset;
            }

            .task-btn-right {
                position: absolute;
                right: 8px;
            }

            .task-wrapper #task-list li .task-container {
                padding: 8px 10px;
            }

            .task-action-btn.task-check {
                width: 36px;
            }

            .roles-menu {
                margin-bottom: 20px;
            }

            .contacts-list {
                padding: 0 70px 0 15px;
            }

            .left-action {
                text-align: center;
                margin-bottom: 15px;
            }

            .right-action {
                text-align: center;
            }

            .top-action-left .float-left {
                float: none !important;
            }

            .top-action-left .btn-group {
                margin-bottom: 15px;
            }

            .top-action-right {
                text-align: center;
            }

            .top-action-right a.btn.btn-white {
                margin-bottom: 15px;
            }

            .mail-sent-time {
                float: left;
                margin-top: 10px;
                width: 100%;
            }

            .nav-tabs.nav-justified {
                border-bottom: 1px solid #ddd;
            }

            .nav-tabs.nav-justified>li>a.active,
            .nav-tabs.nav-justified>li>a.active:hover,
            .nav-tabs.nav-justified>li>a.active:focus {
                border-color: transparent transparent transparent #f43b48;
                border-left-width: 2px;
            }

            .nav-tabs {
                border-bottom: 0;
                position: relative;
                background-color: #fff;
                padding: 5px 0;
                border: 1px solid #ddd;
                border-radius: 3px;
            }

            .nav-tabs .nav-item {
                margin-bottom: 0;
            }

            .nav-tabs>li>a {
                border-width: 2px;
                border-left-color: transparent;
            }

            .nav-tabs .nav-link {
                border-width: 2px;
            }

            .nav-tabs>li>a:hover,
            .nav-tabs>li>a:focus {
                background-color: #fafafa;
            }

            .nav-tabs .nav-item.show .nav-link,
            .nav-tabs .nav-link.active,
            .nav-tabs>li>a.active,
            .nav-tabs>li>a.active:hover,
            .nav-tabs>li>a.active:focus {
                background-color: #f5f5f5;
                border-color: transparent transparent transparent #f43b48;
                border-left-width: 2px;
            }

            .nav-tabs>li.open:not(.active)>a,
            .nav-tabs>li.open:not(.active)>a:hover,
            .nav-tabs>li.open:not(.active)>a:focus {
                background-color: #fafafa;
            }

            .nav-tabs.nav-tabs-solid {
                padding: 5px;
            }

            .nav-tabs.nav-tabs-solid.nav-tabs-rounded {
                border-radius: 5px;
            }

            .nav-tabs.nav-tabs-solid>li>a {
                border-left-width: 0 !important;
            }

            .nav-tabs-justified {
                border-bottom: 1px solid #ddd;
            }

            .nav-tabs-justified>li>a.active,
            .nav-tabs-justified>li>a.active:hover,
            .nav-tabs-justified>li>a.active:focus {
                border-width: 0 0 0 2px;
                border-left-color: #f43b48;
            }

            .my-video ul li {
                width: 80px;
            }

            .voice-call-avatar .call-avatar {
                width: 120px;
                height: 120px;
            }

            .product-info {
                margin: 20px 0 30px;
            }

            .profile-bg {
                height: 280px;
            }

            .flag-nav>a>span {
                display: none;
            }

            .equal-height-cards>div>div.card {
                height: unset;
            }
        }

        @media only screen and (max-width: 575.98px) {
            .contact-cat {
                padding-right: 70px;
            }

            .user-menu {
                display: none;
            }

            .mobile-user-menu {
                display: block;
            }

            .search-box {
                display: none;
            }

            .filter-row {
                margin-bottom: 15px;
            }

            .page-wrapper>.content {
                padding: 15px;
            }

            .profile-view .profile-basic {
                margin-left: 0;
                padding-right: 0;
            }

            .profile-img-wrap {
                position: relative;
                margin: 0 auto;
            }

            .profile-info-left {
                text-align: center;
            }

            .profile-basic {
                margin-left: 0;
                margin-top: 15px;
            }

            .page-title {
                font-size: 18px;
            }

            .fc-toolbar .fc-right {
                display: inline-block;
                float: none;
                margin: 10px auto 0;
                width: 200px;
                clear: both;
            }

            .fc-toolbar .fc-left {
                float: none;
                margin: 0 auto;
                width: 200px;
            }

            .upload-text {
                font-size: 18px;
            }

            .call-duration {
                display: block;
                margin-top: 0;
                margin-bottom: 10px;
                position: inherit;
            }

            .end-call {
                margin-top: 10px;
                position: inherit;
            }

            .chat-panel .chats {
                padding: 15px 0;
            }

            .chat-right .chat-content {
                max-width: 90%;
            }

            .chat-right .chat-body {
                padding-left: 0;
                padding-right: 0;
            }

            .chat-left .chat-content {
                max-width: 90%;
            }

            .chat-left .chat-body {
                padding-left: 0;
                padding-right: 0;
            }

            .chat-avatar .avatar {
                height: 20px;
                line-height: 20px;
                width: 20px;
            }

            .account-box {
                width: 100%;
                margin-bottom: 20px;
            }

            .float-left.ticket-view-details {
                width: 80%;
            }

            .custom-menu>li>a {
                margin-left: 10px;
            }

            .contact-alphapets {
                top: 113px;
            }

            .account-page .main-wrapper {
                flex-direction: column;
            }

            .otp-input {
                font-size: 18px;
                height: 50px;
                margin-right: 10px;
                width: 52px;
            }

            .account-wrapper {
                padding: 15px;
            }

            .leave-right {
                flex: 0 0 auto;
            }

            .pagination-lg .page-link {
                font-size: 1.2rem;
                padding: 0.5rem 0.85rem;
            }

            .call-box .call-avatar {
                height: 100px;
                max-width: 100px;
                min-width: 100px;
            }

            .call-box .call-wrapper .call-items .call-item {
                padding: 10px;
            }

            .call-box .call-wrapper .call-items .call-item.call-end {
                margin: 30px 5px 0;
                padding: 10px;
            }

            .submit-section .submit-btn {
                margin: 0 0 10px !important;
            }

            .leave-row {
                display: block;
            }

            .leave-box .subtitle {
                display: none;
            }

            .leave-right {
                margin-top: 20px;
            }

            .leave-inline-form {
                display: block;
            }

            .page-header .breadcrumb {
                display: none;
            }

            .add-btn {
                font-size: 14px;
                min-width: inherit;
            }
        }

        /*Project Board*/
        .page-header .page-title i {
            color: #e6e9ef;
        }

        .page-header .page-title i:hover,
        .page-header .page-title i:active {
            color: #ffcb00;
        }

        [contenteditable="true"]:active,
        [contenteditable="true"]:focus {
            border: 1px dashed #e6e9ef;
            outline: none;
            /*  padding:5px;*/
        }

        .page-header .text-truncate {
            width: 330px;
        }

        .avatar-group {
            display: inline-flex;
        }

        .avatar-group .avatar+.avatar {
            margin-left: -.75rem;
        }

        .avatar-group .avatar-xs+.avatar-xs {
            margin-left: -1.25rem;
        }

        .avatar-group .avatar-sm+.avatar-sm {
            margin-left: -1.75rem;
        }

        .avatar-group .avatar-lg+.avatar-lg {
            margin-left: -1rem;
        }

        .avatar-group .avatar-xl+.avatar-xl {
            margin-left: -1.28125rem;
        }

        .avatar-group .avatar:hover {
            z-index: 1;
        }

        .avatar-title {
            width: 100%;
            height: 100%;
            background-color: #2962ff;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 11px;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="csv-data">
                    <div class="card-body" id="printContent">
                        <h4 class="payslip-title">Payslip for the month of {{ \Carbon\Carbon::now()->format('M') }} {{ \Carbon\Carbon::now()->year }} </h4>
                        <div class="row">
                            <div class="col-sm-6 m-b-20">
                                <ul class="list-unstyled mb-0">
                                    <li><strong>EnTeam</strong> </li>
                                    <li>DHA Phase 6,</li>
                                    <li>Lahore, Pakistan</li>
                                </ul>
                            </div>
                            <div class="col-sm-6 m-b-20">
                                <div class="invoice-details">
                                    <h3 class="text-uppercase">Payslip <span id="randomNumber"></span></h3>
                                    <ul class="list-unstyled">
                                        <li>Salary Month: <span>{{ \Carbon\Carbon::now()->format('M') }} , {{ \Carbon\Carbon::now()->year }} </span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 m-b-20">
                                <ul class="list-unstyled">
                                    <li>
                                        <h5 class="mb-0"><strong>{{ $name }}</strong></h5>
                                    </li>
                                    <li><span>{{ $position }}</span></li>
                                    <li>Email: {{$user_email}}</li>
                                    <li>Department: {{ $department }}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div>
                                    <h4 class="m-b-10"><strong>Earnings</strong></h4>
                                    <table class="table table-bordered">
                                        <tbody>
                                            <?php
                                            $a =  (int)$basic_salary;
                                            $b =  (int)$incentive_pay;
                                            $c =  (int)$conveyance_allowance;
                                            $d =  (int)$medical_allowance;
                                            $e =  (int)$house_rent_allowance;
                                            $Total_Earnings   = $a + $b + $c + $d + $e;
                                            ?>
                                            <tr>
                                                <td><strong>Basic Salary</strong> <span class="float-right">${{ $basic_salary }}</span></td>
                                            </tr>
                                            <tr>
                                                <td><strong>House Rent Allowance</strong> <span class="float-right">${{ $house_rent_allowance }}</span></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Conveyance</strong> <span class="float-right">${{ $conveyance_allowance }}</span></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Incentive Pay</strong> <span class="float-right">${{ $incentive_pay }}</span></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Medical Allowance</strong> <span class="float-right">${{ $medical_allowance }}</span></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Total Earnings</strong> <span class="float-right"><strong>$ <?php echo $Total_Earnings ?></strong></span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div>
                                    <h4 class="m-b-10"><strong>Deductions</strong></h4>
                                    <table class="table table-bordered">
                                        <tbody>

                                            <?php
                                            $a =  (int)$provident_fund;
                                            $b =  (int)$leaves;
                                            $c =  (int)$prof_tax;
                                            $e =  (int)$health_insurance;
                                            $Total_Deductions   = $a + $b + $c + $e;
                                            ?>
                                            <tr>
                                                <td><strong>Provident Fund</strong> <span class="float-right">${{ $provident_fund }}</span></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Leaves</strong> <span class="float-right">${{ $leaves }}</span></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Prof. Tax</strong> <span class="float-right">${{ $prof_tax }}</span></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Health Insurance</strong> <span class="float-right">${{ $health_insurance }}</span></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Total Deductions</strong> <span class="float-right"><strong>$<?php echo $Total_Deductions; ?></strong></span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <?php
                                $total = $Total_Earnings - $Total_Deductions;
                                ?>
                                <p><strong>Net Salary: <?php echo $total; ?></strong></p>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Content -->
                </div>
            </div>
            <!-- /Page Wrapper -->
        </div>
    </div>
</body>

</html>