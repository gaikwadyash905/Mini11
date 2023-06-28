<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini11 | System Requirements</title>
    <link rel="stylesheet" href="assets/css/min.css">
    <link rel="shortcut icon" href="Mini11 icon.png" type="image/x-icon">
</head>

<body style="background-color: #cccccc;">

<?php include('header.php') ?>

    <section class="text-gray-400 bg-gray-900 body-font">
        <div class="container px-5 py-24 mx-auto">
          <h1 class="sm:text-3xl text-2xl font-medium title-font text-center text-white mb-20">System Requirements</h1>
          <br>
          <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6">
            <div class="p-4 md:w-1/3 flex">
              <div class="flex-grow pl-6">
                <h2 class="text-white text-lg title-font font-medium mb-2">1GHz or faster CPU</h2>
                <p class="leading-relaxed text-base">Mini11 requires a processor with a clock speed of at least 1GHz or higher. This means that it can run on most modern processors and even some older ones.</p>
                </div>
            </div>
            <div class="p-4 md:w-1/3 flex">
              <div class="flex-grow pl-6">
                <h2 class="text-white text-lg title-font font-medium mb-2">RAM and Storage</h2>
                <p class="leading-relaxed text-base">Mini11 needs 2 GB RAM and 20 GB storage for smooth performance. RAM runs programs and storage holds files. Manage files to avoid running out of space.</p>
                </div>
            </div>
            <div class="p-4 md:w-1/3 flex">
              <div class="flex-grow pl-6">
                <h2 class="text-white text-lg title-font font-medium mb-2">No TPM required</h2>
                <p class="leading-relaxed text-base">Mini11 runs without TPM. If your device doesn't have TPM, consider alternative security measures.</p>
              </div>
            </div>
          </div>
          <button onclick="window.location.href = 'Downloads.php'" class="flex mx-auto mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg" style="background-color: #0078D7;">Download Now</button>
        </div>
      </section>

      <?php include('footer.php') ?>
      
</body>

</html>