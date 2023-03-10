var videosListObjs
fetch('./data.json')
    .then(respuesta => respuesta.json())
    .then(data => {
        dataColect(data)
        ReyVideo(data)
        ListVedios(data)
    })
    .catch(error => console.error('problem a 3chiri:', error ))
    
    // reyVideo.childNodes[1].setAttribute('src','lkjhsdf')
    // console.log(reyVideo.childNodes[1])
    // videoToplay[0].style.display = 'block';
    function dataColect (data) {
        data ? videosListObjs = data : console.log('no hay data')
    }
    function ReyVideo(video) {

    let reyVideoStr = `<video width="100%" height="40%" controls preload="metadata"  playsinline autoplay muted loop
                        autopictureinpicture="flase"
                        id="reyVideo"
                        >
                        <source src="${video[0].path}" type="video/mp4" />
                            lopa dopa
                    </video>`
    let reyVideo = document.getElementById('reyVideo')
    let videoToplay = document.getElementsByClassName('video-toPlay')
    videoToplay[0].innerHTML = reyVideoStr
}

// ?---------------add a list of videos in right side ---------------
function ListVedios(data) {
    let toWatchVideo = document.getElementsByClassName('vidios_toWatch')
    // let video = toWatchVideo[0].childNodes[1]
    // let toWatch_data = toWatchVideo[0].childNodes[3]
    for (let i = 0 ; i<data.length ;i++) {

        let video_list = document.getElementsByClassName('video-list')
        
        console.log(data.length)
        let toWatch = document.createElement('div')
        toWatch.classList.add("vidios_toWatch")
        toWatch.innerHTML=`<video width="100%" height="80%"  preload="metadata" playsinline autoplay muted loop 
        autopictureinpicture="flase"
        >
        <source src='${data[i].path}'type="video/mp4" />
        lopa dopa
        </video>
        <div class="vidios_toWatch_data">
        <h4>${data[i].name}</h4>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed modi delectus magnam distinctio aspernatur earum dolor dignissimos tempore labore facilis eaque placeat, enim accusantium veritatis numquam consequuntur minima esse deleniti.
        </div>`
        video_list[0].appendChild(toWatch)
        // -------------------------------
        toWatch.childNodes[0].addEventListener('click',(evnt) => {
            ClickToWatch(evnt,toWatch)
        })
    }
}

function ClickToWatch(evnt,toWatch) {
    console.log('click')
    console.log(toWatch.childNodes[0].childNodes[1])
    document.getElementById('reyVideo').innerHTML= ''
    let videoSrc = document.createElement('source')
    videoSrc.setAttribute('src',toWatch.childNodes[0].childNodes[1].getAttribute('src'))
    document.getElementById('reyVideo').appendChild(videoSrc)
    document.getElementById('reyVideo').load()
    // let reyParent = document.getElementsByClassName(video-toPlay)
    // reyParent[0].innerHTML=''
    // toWatch.innerHTML=''
    
}