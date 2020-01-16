## why we validate?

every day there are:

-   500 million tweets
-   294 billion emails
-   5 billion searches
-   300 new posts on laracasts
-   64.5k downloads of spatie

## then there is alot of data => through APIs or in forms

-   the data pass between servers and users

## Can not we trust our users?

-   No

## validate with HTML5

-   required
-   type="email"
-   pattern=".+@.+\..+"
-   minlength="6"
-   pattern="^(?=.\d)(?=.[a-z])(?=.\*[A-Z]).{8,}\$"

But HTML5 depends on the browser
