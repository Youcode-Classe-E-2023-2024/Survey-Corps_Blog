<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Multiple Blog Addition</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>

<body >
  <?php include ('nav_bar_home.php');
   ?>
  <div class="bg-blue-500  min-h-screen flex items-center">
    <div class="w-full">
        <h2 class="text-center drop-shadow-md font-bold text-6xl uppercase mb-10">new blogs</h2>
        <div class="bg-white p-10 rounded-lg shadow md:w-3/4 mx-auto lg:w-1/2">

            <form  method="post" enctype="multipart/form-data">
                <div>
                    <div class="mb-5">
                        <label for="name" class="block mb-2 font-bold text-gray-600 uppercase">Title</label>
                        <input type="text" id="name" name="name[0]" placeholder="Post Title" class="border border-gray-300 shadow p-3 w-full rounded ">

                    </div>
                    <div class="mb-5">
                        <label for="category" class="block mb-2 font-bold text-gray-600 uppercase">Category</label>
                        <div class="relative border border-gray-300 text-gray-800 bg-white shadow-lg">
                            <label for="category" class="sr-only">My field</label>
                            <select class="appearance-none w-full py-1 px-2 bg-white" name="category[0]" id="category">
                                <option value="">Please choose&hellip;</option>
                                <option value="1">Item 1</option>
                                <option value="2">Item 2</option>
                                <option value="3">Item 3</option>
                            </select>
                            <div class="pointer-events-none absolute right-0 top-0 bottom-0 flex items-center px-2 text-gray-700 border-l">
                                <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="mb-5">
                        <label class="block mb-2 font-bold text-gray-600 uppercase" for="large_size">Image</label>
                        <input class="block w-full text-lg text-gray-900 border border-gray-300 rounded-lg
                         cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700
                          dark:border-gray-600 dark:placeholder-gray-400" name="image[0]" id="large_size" type="file">

                    </div>

                    <div class="mb-5">
                        <label for="desc" class="block mb-2 font-bold text-gray-600 uppercase">Description</label>
                        <input type="text" id="desc" name="desc[0]" placeholder="description." class="border border-gray-300 shadow p-3 w-full rounded ">

                    </div>

                    <div class="mb-5">
                        <label for="prix" class="block mb-2 font-bold text-gray-600 uppercase">price</label>
                        <input type="prix" id="prix" name="prix[0]" placeholder="prix." class="border border-gray-300 shadow p-3 w-full rounded ">

                    </div>
                </div>
                <div id="dynamicDivContainer"></div>
                <div class="flex justify-between">

                    <button type="button" onclick="createDynamicDiv()" class="flex justify-center w-1/3 bg-blue-500 text-white font-bold p-4   rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>

                        more post</button>

                    <button class="flex justify-center w-1/3 bg-green-500 text-white font-bold p-4 rounded-lg"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                        Submit</button>
                </div>



            </form>
        </div>
    </div>
</div>
<script>
    var number = 0;

    function createDynamicDiv() {
        // Create the HTML structure using innerHTML
        +number++;
        newDivHtml = `
      <br>
      <h2 class="text-center drop-shadow-md font-bold text-2xl uppercase mb-10" >Blog ${number} </h2>
      <div>
                    <div class="mb-5">
                        <label for="name" class="block mb-2 font-bold text-gray-600 uppercase">Name</label>
                        <input type="text" id="name" name="name[${number}]" placeholder="Post name." class="border border-gray-300 shadow p-3 w-full rounded ">

                    </div>
                    <div class="mb-5">
                        <label for="category" class="block mb-2 font-bold text-gray-600 uppercase">category</label>
                        <div class="relative border border-gray-300 text-gray-800 bg-white shadow-lg">
                            <label for="category" class="sr-only">My field</label>
                            <select class="appearance-none w-full py-1 px-2 bg-white" name="category[${number}]" id="category">
                                <option value="">Please choose&hellip;</option>
                                <option value="1">Item 1</option>
                                <option value="2">Item 2</option>
                                <option value="3">Item 3</option>
                            </select>
                            <div class="pointer-events-none absolute right-0 top-0 bottom-0 flex items-center px-2 text-gray-700 border-l">
                                <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="mb-5">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white uppercase" for="large_size">image</label>
                        <input class="block w-full text-lg text-gray-900 border border-gray-300 rounded-lg
                         cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700
                          dark:border-gray-600 dark:placeholder-gray-400" name="image[${number}]" id="large_size" type="file">

                    </div>

                    <div class="mb-5">
                        <label for="desc" class="block mb-2 font-bold text-gray-600 uppercase">description</label>
                        <input type="text" id="desc" name="desc[${number}]" placeholder="description." class="border border-gray-300 shadow p-3 w-full rounded ">

                    </div>

                    <div class="mb-5">
                        <label for="prix" class="block mb-2 font-bold text-gray-600 uppercase">prix</label>
                        <input type="prix" id="prix" name="prix[${number}]" placeholder="prix." class="border border-gray-300 shadow p-3 w-full rounded ">

                    </div>
                </div>
      `


        ;
        document.getElementById("dynamicDivContainer").innerHTML += newDivHtml;
        // Append the new div to the dynamicDivContainer
    }
</script>

</body>

</html>
