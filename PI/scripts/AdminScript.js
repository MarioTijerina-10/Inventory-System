// saving the main content id


//Loads new scripts
function loadScript(url) {
    const script = document.createElement('script');
    script.src = url;
    script.type = 'text/javascript';
    script.async = false; 
    document.body.appendChild(script);
}

//opens different registry forms
function OpenForum(){
    console.log('Hello');
    var Forum = new XMLHttpRequest;
    formId = this.id;
    var ForumDiv = document.getElementById
    ('registryForm');

    Forum.open('GET',`/PI/AdminCode/Forms/${formId}.php`,true);

    Forum.onload = function(){
        if(this.status == 200){
            document.getElementById
    ('registryForm').innerHTML = this.responseText;
            loadScript('/PI/scripts/FormFunctionality.js');
        }           
    }

    Forum.send();
}
//closes different registry forms
function CloseForum(){
    console.log('yes');

    document.getElementById('registryForm').innerHTML = '';
}