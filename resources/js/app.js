import './bootstrap';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';
import { initializeApp } from "firebase/app";
import { getDatabase , ref, set } from "firebase/database";

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => require(`./Pages/${name}.vue`),
    setup({ el, app, props, plugin }) {
        return createApp({ render: () => h(app, props) })
            .use(plugin)
            .mixin({ methods: { route } })
            .mount(el);
    },
});

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

// Coba insert data
writeLocationData('1','123683762836','93793598579');
writeLocationData('2','3762836','93793598579');
writeLocationData('3','123683766','9379');

function writeLocationData(LocId, Latitude, Langitude) {
  set(ref(db, 'location/' + LocId), {
    id_location: LocId,
    latitude: Latitude,
    langitude: Langitude,
  });
}
