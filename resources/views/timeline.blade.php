<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Twitter</title>
    <link rel="stylesheet" href="{{ asset('css/timeline.css') }}">
</head>
<body>
    <div class="wrapper">
      <form action="">
        <div class="post-box">
            <input type="text" name="tweet" placeholder="いまなにしてる？">
            <button type="submit" class="submit-btn">ツイート</button>
        </div>
      </form>

      <div class="tweet-wrapper">
        <div class="tweet-box">
        </div>
      </div>
    </div>
</body>
</html>