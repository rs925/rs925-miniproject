@extends('Layouts.default')

@section('content')


    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">Hello, world! IS601</h1>
            <p>This is IS601 Mini Project. We are using Bootstrap Jumbotron Template to learning more about it.</p>
            <p><a class="btn btn-primary btn-lg" href="/about" role="button">Learn more &raquo;</a></p>
        </div>
    </div>

    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
            <div class="col-md-4">
                <h2>Laravel</h2>
                <p>Laravel is a free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the model–view–controller (MVC) architectural pattern. Some of the features of Laravel are a modular packaging system with a dedicated dependency manager, different ways for accessing relational databases, utilities that aid in application deployment and maintenance, and its orientation toward syntactic sugar.
                </p>
                <p><a class="btn btn-secondary" href="https://en.wikipedia.org/wiki/Laravel" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <h2>SQL</h2>
                <p> Structured Query Language is a domain-specific language used in programming and designed for managing data held in a relational database management system (RDBMS), or for stream processing in a relational data stream management system (RDSMS). In comparison to older read/write APIs like ISAM or VSAM, SQL offers two main advantages: first, it introduced the concept of accessing many records with one single command; and second, it eliminates the need to specify how to reach a record, e.g. with or without an index.
                </p>
                <p><a class="btn btn-secondary" href="https://en.wikipedia.org/wiki/SQL" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <h2>CSS (Cascading Style Sheets)</h2>
                <p>Cascading Style Sheets (CSS) is a style sheet language used for describing the presentation of a document written in a markup language.[1] Although most often used to set the visual style of web pages and user interfaces written in HTML and XHTML, the language can be applied to any XML document, including plain XML, SVG and XUL, and is applicable to rendering in speech, or on other media. Along with HTML and JavaScript, CSS is a cornerstone technology used by most websites to create visually engaging webpages, user interfaces for web applications, and user interfaces for many mobile applications.
                </p>
                <p><a class="btn btn-secondary" href="https://en.wikipedia.org/wiki/Cascading_Style_Sheets" role="button">View details &raquo;</a></p>
            </div>
        </div>

        <hr>

    </div> <!-- /container -->


@endsection
