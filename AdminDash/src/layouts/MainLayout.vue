<template>
  <q-layout view="lHh Lpr lFf">
    <q-header elevated class="bg-dark">
      <q-toolbar>
        <q-btn
          flat
          dense
          round
          icon="menu"
          aria-label="Menu"
          @click="toggleLeftDrawer"
        />

        <q-toolbar-title>
         CV AdminPage
        </q-toolbar-title>

        <div>CV M v0.1</div>
      </q-toolbar>
    </q-header>

    <q-drawer
      v-model="leftDrawerOpen"
      show-if-above
      bordered
    >
      <q-list>
        <q-item-label
          header
        >
          Essential Links
        </q-item-label>

        <EssentialLink
          v-for="link in essentialLinks"
          :key="link.title"
          v-bind="link"
        />
      </q-list>
    </q-drawer>

    <q-page-container>
      <router-view />
    </q-page-container>
  </q-layout>
</template>

<script>
import { defineComponent, ref } from 'vue'
import EssentialLink from 'components/EssentialLink.vue'

const linksList = [
  {
    title: 'آموزشی',
    caption: 'َAytronic',
    icon: 'school',
    link: 'https://ay7.ir/'
  },
  {
    title: 'گیتهاب من',
    caption: 'github.com/SalimBahremand',
    icon: 'code',
    link: 'https://github.com/SalimBhrmnd'
  },
  {
    title: 'تلگرام',
    caption: 'chat.quasar.dev',
    icon: 'chat',
    link: 'https://chat.quasar.dev'
  },
  {
    title: 'واتس اپ',
    caption: 'forum.quasar.dev',
    icon: 'record_voice_over',
    link: 'https://forum.quasar.dev'
  },
  {
    title: 'Linkedin',
    caption: '@quasarframework',
    icon: 'rss_feed',
    link: 'https://www.linkedin.com/in/salim-bahremand-3a1308243/'
  },
  {
    title: 'Facebook',
    caption: 'فیس بوک',
    icon: 'public',
    link: 'https://facebook.salim.b'
  },

]

export default defineComponent({
  name: 'MainLayout',

  components: {
    EssentialLink
  },

  setup () {
    const leftDrawerOpen = ref(false)

    return {
      essentialLinks: linksList,
      leftDrawerOpen,
      toggleLeftDrawer () {
        leftDrawerOpen.value = !leftDrawerOpen.value
      }
    }
  }
})
</script>
