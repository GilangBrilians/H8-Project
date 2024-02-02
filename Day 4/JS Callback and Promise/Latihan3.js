function loadImage(imageUrl, successCallback, errorCallback) {
    var img = new Image();

    img.onload = function () {
        successCallback(img);
    };

    img.onerror = function () {
        errorCallback(new Error('Gagal memuat gambar'));
    };

    img.src = imageUrl;
}

loadImage('https://avatars.githubusercontent.com/u/61282996?v=4', 
    function (loadedImage) {
        console.log('Gambar berhasil dimuat:', loadedImage);
    },
    function (error) {
        console.error('Kesalahan:', error.message);
    }
);

