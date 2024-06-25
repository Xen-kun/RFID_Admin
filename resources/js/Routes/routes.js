import Index from '../App.vue';
import Home from '../Pages/Home.vue';
import Service from '../Pages/Services.vue';

export const routes = [
    {
        path: '/',
        component: Index,
        name: "Index",
        children: [
            {
                path: '',
                component: Home,
                name: 'Home Page'
            },
            {
                path: 'services',
                component: Service,
                name: 'Service page'
            },
        ]
    }
];