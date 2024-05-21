document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById('appointment-form');
    const randevuListesi = document.getElementById('randevu-listesi');
    const errorMessage = document.getElementById('error-message');

    form.addEventListener('submit', function(event) {
        event.preventDefault();
        
        const formData = new FormData(form);
        const randevu = {};
        formData.forEach((value, key) => {
            randevu[key] = value;
        });

        fetch('api/randevular.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(randevu)
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                form.reset();
                errorMessage.style.display = 'none';
                alert("Randevunuz başarı ile kaydedilmiştir.");
                randevuListesiniGuncelle();
            } else {
                errorMessage.style.display = 'block';
                errorMessage.textContent = data.message;
                alert("Bir hata oluştu.");
            }
        })
        .catch(error => {
            console.error('Hata:', error);
            alert("Bir hata oluştu.");
        });
    });

    function randevuListesiniGuncelle() {
        fetch('api/randevular.php')
            .then(response => response.json())
            .then(data => {
                randevuListesi.innerHTML = '';
                data.randevular.forEach(randevu => {
                    const li = document.createElement('li');
                    li.textContent = `${randevu.adsoyad} (${randevu.bolum}) - ${randevu.randevutarih}`;
                    randevuListesi.appendChild(li);
                });
            })
            .catch(error => console.error('Hata:', error));
    }

    randevuListesiniGuncelle();
});
