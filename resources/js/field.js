import IndexField from './components/IndexField';
import DetailField from './components/DetailField';
import FormField from './components/FormField';

Nova.booting(app => {
    app.component('index-nova-multiple-radio', IndexField);
    app.component('detail-nova-multiple-radio', DetailField);
    app.component('form-nova-multiple-radio', FormField);
});
