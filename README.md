<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pinterest Automation</title>
</head>
<body>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>

// تثبيت ملف تشغيل Chrome باستخدام ChromeDriverManager
axios.get('https://raw.githubusercontent.com/roseline124/pinterest/main/script.py')
  .then(function (response) {
    // تنفيذ الكود البرمجي Python
    eval(response.data);
  })
  .catch(function (error) {
    console.log(error);
  });

</script>

</body>
</html>
