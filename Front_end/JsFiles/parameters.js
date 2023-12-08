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

/**
 * getting blogs
 */

function fetchDataAndAppendToTable() {
    fetch('', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded'
      },
      body: formData
    })
    .then(response => response.text())
    .then(dataString => {
      console.log('Success:', dataString);

      const tableBody = document.querySelector('table');

      // Append the received data string as a row
      tableBody.insertAdjacentHTML('beforeend', dataString);
    })
    .catch(error => {
      console.error('Error:', error);
    });
  }

  document.addEventListener('load', fetchDataAndAppendToTable);

/**
 * send new data
 */
function sendData() {
    const newTitle = document.getElementById('editedTitle');
    const newDescription = document.getElementById('editedDescription');
    var url = '';
    var data = {
      title: newTitle,
      description: newDescription
    };
  
    fetch(url, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(data)
    })
    .then(response => response.json())
    .then(data => {
      console.log('Data sent successfully!');
      // Handle the response if needed
    })
    .catch(error => {
      console.error('Error:', error);
      // Handle errors
    });
    location.reload;
  }
  
  const editForm = document.getElementById('editForm');
  editForm.addEventListener('submit', sendData);