


document.addEventListener('DOMContentLoaded',function(){
    const url = `${window.location.origin}/getall/event`

    axios.get(url).then((resnponse)=>{
        const dataEvent = resnponse.data;
        console.log(dataEvent);
    })
})
