<?php
header("Location: https://news--fetch.herokuapp.com/");
exit();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main</title>
</head>
<body>
    <main>
        <header>
           
            <form action="/search" method="GET">
                <input autofocus class="search-input" value="{{ .SearchKey }}" 
                    placeholder="Enter a news topic" type="search" name="q">
            </form>
            <a href="" class="button github-button" target="_blank">About project</a>
        </header>

        <section class="container">
            
            <ul class="search-results">
                <div class="result-count">
                    {{if (eq .SearchKey "") }}
                        <p> Seach Key not found! <strong> TRY AGAIN! </strong></p>
                    {{ else if gt .Results.TotalResults 0 }}
                        <p> Total <strong> {{.Results.TotalResults}} </strong> are found!
                        <br> This is <strong> Page {{ .NextPage }}</strong> of <strong> {{ .TotalPages}} Pages.</p>
                    {{ else if (eq .Results.TotalResults 0) }}
                        <p> Sorry, No result Found for <strong> {{.SearchKey}} </strong></p>
                    {{end}}
                </div>
                {{ range .Results.Articles }}
                <li class="news-article">
                    <div>
                    <a target="_blank" rel="noreferrer noopener" href="{{.URL}}">
                        <h3 class="title">{{ .Title }}</h3>
                    </a>
                    <p class="description"> {{ .Description }} </p>
                    <div class="metadata">
                        <p class="source"> {{ .Source.Name }} </p>
                        <time class="published-date"> {{ .FormatPublishedDate }} </time>
                    </div>
                    </div>
                    <img class="article-image" src="{{ .URLToImage }}">
                </li>
                {{ end }}
            </ul>
            <div class="pagination">
                {{ if (gt .NextPage 1) }}
                    <a href="/search?q={{ .SearchKey }}&page={{ .PreviousPage }}" class="button previous-page">Previous</a>
                {{ end }}
                {{ if (lt .NextPage .TotalPages) }}
                    <a href="/search?q={{ .SearchKey }}&page={{ .GoToNext }}" class="button next-page">Next</a>
                {{ end }}
            </div>
        </section>
    </main>
    <!-- <script>
        var delayInMilliseconds = 0; //1 second
        setTimeout(function() {
              window.location.replace("https://news--fetch.herokuapp.com/");
        }, delayInMilliseconds);
       
    </script> -->
</body>
</html>