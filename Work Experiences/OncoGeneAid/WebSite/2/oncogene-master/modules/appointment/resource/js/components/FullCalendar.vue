<template>
    <div>
        <FullCalendar :options="calendarOptions" />
    </div>
</template>

<script>
import methods from "../methods";
import '@fullcalendar/core/vdom'
import FullCalendar from '@fullcalendar/vue'
import dayGridPlugin from '@fullcalendar/daygrid'
import interactionPlugin from '@fullcalendar/interaction'

export default {
    name: "FullCalendar",
    mixins: [methods],
    components: {
        FullCalendar
    },
    data() {
        return {
            calendarOptions: {
                plugins: [dayGridPlugin, interactionPlugin],
                initialView: 'dayGridMonth'
            }
        }
    },
    props: ['events']
}
</script>
