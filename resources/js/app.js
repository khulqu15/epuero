import './bootstrap';

import { createApp, h, VueElement } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';
import { initializeApp } from "firebase/app";
import { getDatabase , push, child, ref, set, get, onValue, update, remove } from "firebase/database";
import { Form, HasError, AlertError } from 'vform'
window.Form = Form;
// Vue.component(HasError.name, HasError);
// Vue.component(AlertError.name, AlertError);

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

InertiaProgress.init({ color: '#4B5563' });


// Your web app's Firebase configuration
const firebaseConfig = {
  apiKey: "AIzaSyAC-rabyrVT2fBAN6MvzOhhpBwcnpx48iU",
  authDomain: "epuero-5f880.firebaseapp.com",
  projectId: "epuero-5f880",
  storageBucket: "epuero-5f880.appspot.com",
  messagingSenderId: "267893736576",
  appId: "1:267893736576:web:7ebd6da2fb4d430b455265",
  databaseURL: "https://epuero-5f880-default-rtdb.firebaseio.com"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);

// Connect db
const db = getDatabase();

var LocationId = 1;
function writeLocationData(Latitude, Langitude) {
  set(ref(db, 'location/' + LocationId), {
    id_location: LocationId,
    latitude: Latitude,
    langitude: Langitude,
  });
  LocationId = LocationId + 1;
}

function readLocationData() {
  onValue(ref(db, 'location/'), (snapshot) => {
    var result = snapshot.val();
    console.log(result);
  });
}

function updateLocationData(LocId, Latitude, Langitude) {

  const postData = {
    latitude: Latitude,
    langitude: Langitude,
  };

  const updates = {};
  updates['/location/' + LocId] = postData;

  return update(ref(db), updates);
}

function deleteLocationData(LocId) {
  return remove(ref(db, 'location/' + LocId));
}

// function updateLocationData(LocId) {
//   onValue(ref(db, 'location/' + LocId), (snapshot) => {
//     var result = snapshot.val();
//     console.log(result);
//   });
// }

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => require(`./Pages/${name}.vue`),
    setup({ el, app, props, plugin }) {
        const VueApp = createApp({ render: () => h(app, props) })
        VueApp.config.globalProperties.$writeLocationData = writeLocationData;
        VueApp.config.globalProperties.$readLocationData = readLocationData;
        VueApp.config.globalProperties.$updateLocationData = updateLocationData;
        VueApp.config.globalProperties.$deleteLocationData = deleteLocationData;
        VueApp.use(plugin)
            .mixin({ methods: { route } })
            .mount(el);
    },
});