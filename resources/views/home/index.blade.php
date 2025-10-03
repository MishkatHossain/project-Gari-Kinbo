<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <script>
        const Hobbies = {{ \Illuminate\Support\Js::from($hobbies) }};
    </script>



    @verbatim
        Name: {{name}}
        Age: {{age}}
        Job: {{job}}
        Hobbies: {{hobbies}}
    @endverbatim



</body>

</html>