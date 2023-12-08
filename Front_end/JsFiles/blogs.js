const draggables = document.querySelectorAll('.draggable')
const containers = document.querySelectorAll('.container')

draggables.forEach(draggable => {
  draggable.addEventListener('dragstart', () => {
    draggable.classList.add('dragging')
  })

  draggable.addEventListener('dragend', () => {
    draggable.classList.remove('dragging')
  })
})

containers.forEach(container => {
  container.addEventListener('dragover', e => {
    e.preventDefault()
    const afterElement = getDragAfterElement(container, e.clientY)
    const draggable = document.querySelector('.dragging')
    if (afterElement == null) {
      container.appendChild(draggable)
    } else {
      container.insertBefore(draggable, afterElement)
    }
  })
})

function getDragAfterElement(container, y) {
  const draggableElements = [...container.querySelectorAll('.draggable:not(.dragging)')]

  return draggableElements.reduce((closest, child) => {
    const box = child.getBoundingClientRect()
    const offset = y - box.top - box.height / 2
    if (offset < 0 && offset > closest.offset) {
      return { offset: offset, element: child }
    } else {
      return closest
    }
  }, { offset: Number.NEGATIVE_INFINITY }).element
}


  // function to sho and hide the form for add_blog
  function add_Blog() {
    const add_blog = document.getElementById('add_blog');
    const form_add_blog = document.getElementById('form_add_blog');

        // Toggle the display of the form when the add_blog element is clicked
        if (form_add_blog.style.display === 'flex') {
            form_add_blog.style.display = 'none';
        } else {
            form_add_blog.style.display = 'flex';
        }
}


  // Function to add a new blog
  function add_other_or_save_Blog() {
    const imageInput = document.getElementById('image');
    const titleInput = document.getElementById('title');
    const descriptionInput = document.getElementById('description');

    // Check if the inputs are not empty
    if (imageInput.files.length === 0 || !titleInput.value || !descriptionInput.value) {
      Swal.fire({
      title: "Please fill in all fields!",
      });
      return;
    }

    // Clear the form inputs
    imageInput.value = '';
    titleInput.value = '';
    descriptionInput.value = '';
  }

  // Function to save blog
  function save_Blog() {
    const imageInput = document.getElementById('image');
    const titleInput = document.getElementById('title');
    const descriptionInput = document.getElementById('description');

    // Check if the inputs are not empty
    if (imageInput.files.length === 0 || !titleInput.value || !descriptionInput.value) {
      Swal.fire({
      title: "Please fill in all fields!",
      });
      return;
    }

    var requestData = {
      "Titre": titleInput.value,
      "Contenu": descriptionInput.value,
      "id_user": 3
    };
    console.log(requestData);
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "http://localhost/Survey-Corps_Blog/Back_end/start/middleware.php/PAnonces", true);
    xhr.setRequestHeader("Content-Type", "application/json");  // Set the Content-Type header for JSON data
    xhr.setRequestHeader("token", "code");
    xhr.setRequestHeader("userid", "1");
    
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                // Successful response
                var data = JSON.parse(xhr.responseText);
                console.log(data);
            } else {
                // Error handling
                console.error('XHR error:', xhr.status, xhr.statusText);
            }
        }
    };
    
    var requestData = {
        "Titre": titleInput.value,
        "Contenu": descriptionInput.value,
        "id_user": 1
    };
    
    xhr.send(JSON.stringify(requestData))
    // alert
    Swal.fire({
    title: "Good job!",
    text: "Your blog is added!",
    icon: "success"
    });

    // HIDDEN THE FORM AFTER SAVE THE BLOG
    // add_Blog();
  }

  // Function to clear the form inputs
  function clear_form() {
    const imageInput = document.getElementById('image');
    const titleInput = document.getElementById('title');
    const descriptionInput = document.getElementById('description');

    // Clear the form inputs
    imageInput.value = '';
    titleInput.value = '';
    descriptionInput.value = '';
    add_Blog();
  }