<template>
    <div class="chat-inputfield">
        <input v-model="form.message" type="text" placeholder="Напишите сообщение"
        @keyup.enter="sendMessage">
        <button @click="sendMessage" class="button">Отправить</button>
    </div>
</template>

<script>
import {reactive} from 'vue';
import useChat from '../composables/chat';

export default {
    name: 'ChatForm',
    setup(){
        const form = reactive({
            message: '',

        })
        const {errors, addMessage} = useChat()

        const sendMessage = async () => {
            await addMessage(form)
            form.message = ''
        }

        return {
            errors,
            form,
            sendMessage
        }
    }
};
</script>

<style scoped>

</style>
