import './bootstrap';
import Alpine from 'alpinejs'
import Tooltip from "@ryangjchandler/alpine-tooltip";
import dayGridPlugin from '@fullcalendar/daygrid';
import { Calendar } from '@fullcalendar/core';
import googleCalendarPlugin from '@fullcalendar/google-calendar';
import timeGridPlugin from '@fullcalendar/timegrid';
import interactionPlugin from '@fullcalendar/interaction'

Alpine.plugin(Tooltip);
window.Alpine = Alpine
Alpine.start()
window.dayGridPlugin = dayGridPlugin
window.Calendar = Calendar
window.googleCalendarPlugin = googleCalendarPlugin
window.timeGridPlugin = timeGridPlugin
window.interactionPlugin = interactionPlugin
