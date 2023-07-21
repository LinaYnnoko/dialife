<template>
    <div class="chat-content">
        <div v-for="message in messages">
            <div class="message" :class="{'left': message.user.id != user.id, 'right': message.user.id == user.id}">
                <div :class="{'left-message': message.user.id != user.id, 'right-message': message.user.id == user.id}">
                    {{ message.message }}
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import useChat from '../composables/chat';
import {onMounted} from 'vue';

export default {
    name: 'ChatMessage',
    props: {
        user: {
            required: true,
            type: Object
        }
    },
    setup() {
        const {messages, getMessages} = useChat()

        onMounted(getMessages)

        return {
            messages
        }
    }
};
</script>

<style scoped>

</style>
