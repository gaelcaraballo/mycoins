avatar = document.getElementById('avatar');
imageSnippet = document.getElementById('imageSnippet');

avatar.onchange = () => {
    const [file] = avatar.files
    if (file) {
        imageSnippet.src = URL.createObjectURL(file)
        return imageSnippet.src
    }
}
