scriptURL = 'https://script.google.com/macros/s/AKfycbznEi1x6YRJxwtqLs5J-kPZOGJTxRSPtB7NrwgKmhNdK4ywa9fXn0CjiTRPXAy2h8-f/exec'

form = document.forms['info_form']

form.addEventListener('submit', e => {
    e.preventDefault();
    confirmation = confirm("Proceeding will authorize the download of a file, do you want to proceed?")
    if (confirmation){
        fetch(scriptURL, { method: 'POST', body: new FormData(form)})
        .then(response => {
            if (response.ok) {
                return response.text();
            } else {
                throw new Error('Network response was not ok.');
            }
        })
        .then(data => {
            const downloadLink = document.createElement('a');
            downloadLink.href = 'https://drive.google.com/uc?export=download&id=1hnKjSEe5fw7i9iVy2uG8fqSm2h5TVV3E';
            downloadLink.setAttribute('download', 'Coupon'); // Set the desired filename
            downloadLink.style.display = 'none';
            document.body.appendChild(downloadLink);
            downloadLink.click();
            document.body.removeChild(downloadLink);
        })
        .catch(error => console.error('Error!', error.message));
    }
    else{
        window.location.reload();
    }
})