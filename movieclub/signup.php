<!--•	At the top of signup.php:
If POST, grab name and favorite_movie.
Redirect with a query string like:
signup.php?ok=1&name=...&movie=...

Back in the HTML body:
If ok=1, display a success flash message:
"Thanks [name], we’ve added your favorite movie [movie] to our club list.”
-->




<!-- 1. create a form with:
name (text input)
favorite_movie (text input)

 2. On first submit, just var_dump($_POST) so they see the raw data.
-->
 <!--1-->
 <!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sign Up!</title>
    <?php require __DIR__ . '/includes/bootstrapcdnlinks.php'; ?>
</head>
 
  <form action="newsletter.php" method="post" class="mb-3">
            <label class="form-label">Name
                <!--sticky form-->
                <input class="form-control" type="text" name="name" value=<?$name?>>
            </label>
            <label class="form-label mt-2">Favorite Movie
                <input class="form-control" type="text" name="movie">
            </label>
            <button class="btn btn-primary mt-3" type="submit">Submit</button>
        </form>
