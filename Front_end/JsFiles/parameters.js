/**
 * Data JS Library
 */
    $(document).ready(function() {
        $('#myDataTable').DataTable();
    });

/**
 * Edit PopUp JS Styling
 */
   const editPopUp = document.getElementById("bord");
   editPopUp.style.width = "800px";
   editPopUp.addEventListener('mouseover', function() {
       bord.classList.add("bg-blue-100");
   })

/**
 * submit Edit translate
 */
submitEdit.addEventListener('mouseenter', function() {
    submitEdit.style.transform = 'translateX(10px)';
});

submitEdit.addEventListener('mouseleave', function() {
    submitEdit.style.transform = 'translateX(0)';
});


