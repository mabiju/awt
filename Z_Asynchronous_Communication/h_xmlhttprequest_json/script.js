document.getElementById('btn_load').addEventListener('click',getUsersDetails);

let div = document.querySelector('.user');


// AJAX and XMLHttpRequest Object
function getUsersDetails(){
    // 1. create an XMLHttpRequest Object
    let xhr = new XMLHttpRequest();

    // 2. Creat a request
    // method, url, syn/async, user, pass
    xhr.open('GET','users.json',true);

    // 3. send the request
    xhr.send();


    // when request is sent and data is not completely loaded yet
    xhr.onprogress = function(){
        div.textContent = "Loading......";
    }

    xhr.onload = function(){
        // console.log(xhr.responseText);
        // converting JSON to JS Object 
        let users = JSON.parse(xhr.responseText);
        let{arrayOfUsers} = users;

        arrayOfUsers.forEach(element => {
            let html = `
            <div style="display: flex; font-size: 18px; margin: 10px 5px;">
                <div><img src="${element.imgUrl}" alt="" width="200" height="200"></div>
                <div style="padding: 5px;"><p>${element.name}</p></div>
                <div style="padding: 5px;"><p>${element.roll}</p></div>
                <div style="padding: 5px;"><p>${element.address}</p></div>
            </div>
            `;
            div.insertAdjacentHTML('beforeend',html);
        });

        // console.log(arrayOfUsers);
    }
}