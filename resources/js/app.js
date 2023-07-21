import './bootstrap';

import {createApp} from 'vue';
import ChatMessage from './components/ChatMessage.vue';
import ChatForm from './components/ChatForm';

const app = createApp({
    components: {
        ChatMessage,
        ChatForm
    }
})

app.mount('#app')
