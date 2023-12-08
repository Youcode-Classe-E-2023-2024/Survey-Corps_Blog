/**
 * Data JS Library
 */
$(document).ready(function() {

    var table = $('#myDataTable').DataTable({
            responsive: true
        })
        .columns.adjust()
        .responsive.recalc();
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

/**
* From BlogsTable To EditPopUp
*/

const blogsTable = document.getElementById('blogsTable');
const editBtn = document.querySelectorAll('[edit-btn]');
const editPopUpContainer = document.getElementById('editPopUpContainer');

function Edit() {
blogsTable.classList.add('hidden');
editPopUpContainer.classList.remove('hidden');
}

// Loop through each element with the class 'editBtn' and add the event listener
editBtn.forEach(btn => {
btn.addEventListener('click', Edit);
});

