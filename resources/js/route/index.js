import { createApp } from 'vue';

// import
import PostEvent from './../components/event/event-post.vue';



const index = createApp({});


//route layout
index.component('post-event', PostEvent);




export default index;
