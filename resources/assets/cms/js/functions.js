Livewire.on('alert', data => {
    Swal.fire({
        icon: data.icon,
        title: data.title,
        text: data.text,
        html: data.html
    });
    console.log(data.html);
});