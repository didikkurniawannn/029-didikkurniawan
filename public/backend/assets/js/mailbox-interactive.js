const mailboxCard = document.querySelector('.mailbox-card')
const mailboxTable = document.querySelector('.mailbox-table')
const mailboxSearch = document.querySelector('.mailbox-search')
const mailboxList = document.querySelector('.mailbox-list')
const mailboxDetail = document.querySelector('.mailbox-detail')
const mailboxForm = document.querySelector('.mailbox-form')
const mailboxItems = [...document.querySelectorAll('.mailbox-item')]
const mailboxLaporanItems = [...document.querySelectorAll('.mailbox-laporan-item')]
const mailboxTriggerEdit = [...document.querySelectorAll('.mailbox-trigger-edit')]
const mailboxTriggerClose = [...document.querySelectorAll('.mailbox-trigger-close')]
const mailboxTriggerLaporan = [...document.querySelectorAll('.mailbox-trigger-laporan')]

const dataAccessElements = [...document.querySelectorAll('[data-has-access]')]
const dataAccessElementsLength = dataAccessElements.length

if (mailboxTable != null) {
  mailboxItems.forEach(item => {
    item.addEventListener('click', () => {
      const activeItem = document.querySelector('.mailbox-item.active');
      if (activeItem)
        activeItem.classList.remove('active')

      item.classList.remove('unread')
      item.classList.add('active')
      openDetailMailbox(false)
    })
  })

  mailboxTriggerEdit.forEach(trigger => {
    trigger.addEventListener('click', () => {
      openDetailMailbox(true)
    })
  })

  mailboxTriggerClose.forEach(trigger => {
    trigger.addEventListener('click', () => {
      closeDetailMailBox()
    })
  })

  mailboxTriggerLaporan.forEach(trigger => {
    trigger.addEventListener('click', () => {
      mailboxLaporanItems.forEach(item => {
        item.classList.remove('d-none')
      })
    })
  })
}

if (dataAccessElementsLength > 0) {
  dataAccessElements.forEach(elem => {
    const elemAttr = elem.getAttribute('data-has-access')

    if (elemAttr !== loginAs && loginAs !== 'admin') {
      elem.remove()
    }
  })
}

function openDetailMailbox(isForm) {
  mailboxCard.classList.add('open')
  mailboxList.classList.remove('col-sm-12')
  mailboxList.classList.add('col-sm-6')
  mailboxSearch.classList.remove('col-sm-4', 'offset-sm-5')
  mailboxSearch.classList.add('col-sm-9')
  
  if (isForm === true) {
    if (mailboxForm)
      mailboxForm.classList.remove('d-none')
    mailboxDetail.classList.add('d-none')

    const activeItem = document.querySelector('.mailbox-item.active');
    if (activeItem)
      activeItem.classList.remove('active')
  } else {
    if (mailboxForm)
      mailboxForm.classList.add('d-none')
    mailboxDetail.classList.remove('d-none')
  }
}

function closeDetailMailBox() {
  mailboxCard.classList.remove('open')
  mailboxList.classList.remove('col-sm-12')
  mailboxList.classList.remove('col-sm-6')
  mailboxSearch.classList.add('col-sm-4', 'offset-sm-5')
  mailboxSearch.classList.remove('col-sm-9')
  if (mailboxForm)
    mailboxForm.classList.add('d-none')
  mailboxDetail.classList.add('d-none')

  const activeItem = document.querySelector('.mailbox-item.active');
  if (activeItem)
    activeItem.classList.remove('active')
}