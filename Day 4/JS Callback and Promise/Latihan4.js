function loadImage(imageUrl) {
    return new Promise((resolve, reject) => {
        var img = new Image();

        img.onload = function () {
            // Panggil resolve ketika gambar berhasil dimuat
            resolve(img);
        };

        img.onerror = function () {
            // Panggil reject ketika terjadi kesalahan dalam memuat gambar
            reject(new Error('Gagal memuat gambar'));
        };

        img.src = imageUrl;
    });
}

loadImage('https://avatars.githubusercontent.com/u/61282996?v=4')
    .then((loadedImage) => {
        console.log('Gambar berhasil dimuat:', loadedImage);
    })
    .catch((error) => {
        console.error('Kesalahan:', error.message);
    });
