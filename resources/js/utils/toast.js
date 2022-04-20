import {createToast} from "mosha-vue-toastify";
import 'mosha-vue-toastify/dist/style.css'

const toast = (message, type = 'success') => {
    createToast(message, {
        position: 'bottom-right',
        type: type,
        showIcon: 'true',
        swipeClose: 'false',
    })
}

export default toast;
