import moment from 'moment'
import 'moment/locale/fr';


export function formatDate(value) {
    if (value) {
        return moment(String(value)).format('dddd DD MMMM  YYYY hh:mm')
    }
}

export function statusFilter(status) {
    const statusMap = {
        0: 'info',
        1: 'danger',
        2: 'success',
        3: 'danger'
    };
    return statusMap[status];
}


export function phoneFilter(phone) {
    return phone.replace(/[^0-9]/g, '')
        .replace(/(\d{3})(\d{3})(\d{4})/, '($1) $2-$3');
}
