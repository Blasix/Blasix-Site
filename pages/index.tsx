/* eslint-disable @next/next/no-img-element */
import Head from 'next/head'
import Link from 'next/link';
import { useState } from 'react';
import { BsFillMoonStarsFill } from "react-icons/bs";

// Design: https://dribbble.com/shots/18719635-Ahensy-Creative-Design-Agency-Landing-Page-Website
// SVG: https://creazilla.com/nodes/1998602-startup-svg-clipart
// Command to start: npm run dev

export default function Home() {
  const [toggle, setToggle] = useState(false);
  return (
    <div>
      <Head>
        <title>Blasix</title>
        <meta name="description" content="The official Blasix website" />
        <link rel="icon" href="/favicon.ico" />
      </Head>

      <main className='bg-white w-full overflow-hidden'>
        <div className='flex justify-center items-center sm:px-16 px-6'>
          <div className='xl:max-w-[1920px] w-full'>

            <nav className='w-full flex pt-6 mb-12 justify-between items-center text-2xl lg:text-3xl'>
              <h1 className='text-3xl md:text-4xl lg:text-6xl font-quicksandB text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-blue-800'>Blasix</h1>
              <ul className='hidden gap-4 lg:gap-8 list-none items-center font-quicksand md:flex '>
                <a href='#about' >About</a>
                <a href='#skills'>Skills</a>
                <a href='#projects' >Projects</a>
              </ul>
              <Link href='mailto: knock@blasix.com' className='hidden px-4 py-2 font-quicksand md:flex'>Contact Me</Link>
              <div className='md:hidden flex flex-1 justify-end items-center'>
                <img
                  src={toggle ? 'close.svg' : 'menu.svg'}
                  alt='menu'
                  className='w-7 h-7 object-contain'
                  onClick={() => setToggle((prev) => !prev)} />
                <div
                  className={`${!toggle ? "hidden" : "flex"
                    } p-6 absolute top-20 right-0 mx-4 my-2 w-auto rounded-xl bg-gradient-to-br from-gray-100 to-gray-300 sidebar`}>
                  <ul className=' gap-4 lg:gap-8 list-none items-center flex-col font-quicksand flex '>

                    <a href='#about' onClick={() => setToggle((prev) => !prev)}>About </a>
                    <a href='#skills' onClick={() => setToggle((prev) => !prev)}>Skills</a>
                    <a href='#projects' onClick={() => setToggle((prev) => !prev)}>Projects</a>
                    <Link href='mailto: knock@blasix.com' onClick={() => setToggle((prev) => !prev)}>Contact Me</Link>
                  </ul>
                </div>
              </div>
            </nav>

            <section id='home' className='flex lg:flex-row flex-col items-center'>
              <div className='flex flex-col items-center md:items-start '>
                <h2 className='text-5xl sm:text-6xl py-8 md:pl-10 font-quicksandB md:text-7xl 2xl:text-[5.5rem] text-center lg:text-start'>Mobile<br />Development</h2>
                <h3 className='font-quicksand md:py-6 md:pl-20 text-xl sm:text-2xl md:text-[1.6rem] 2xl:text-3xl text-center lg:text-start'>Blasix is a company made by Bas,<br />to create the best innovations &<br />world class quality solutions</h3>
                <a href='mailto: knock@blasix.com' className='flex py-6 md:pl-20 items-center font-quicksandB text-xl sm:text-3xl md:text-5xl'>Lets Talk
                  <span className=' text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-blue-800 px-4'>➜</span>
                </a>
                <a className=' md:py-10 self-center' href='#projects'>
                  <div className=' rounded-full  justify-center items-center w- w-20 h-20 md:w-32 md:h-32 rotate-90 bg-gray-500 p-[2px] cursor-pointer flex md:mr-4 mr-0'>
                    <div className='rounded-full flex justify-center items-center flex-col bg-primary w-[100%] h-[100%] bg-white '>
                      <p className="md:text-4xl text-gray-500">➜</p>
                    </div>
                  </div>
                </a>

              </div>

              <div className='flex-1 flex justify-end items-center md:my-0 my-10 relative'>
                <img src="home.svg" alt="home" className='w-[50rem] h-auto relative z-[5] pb-10' />
              </div>
            </section>

            <div className='lg:h-20' />

            <div className='flex lg:flex-row flex-col justify-between gap-10'>
              <section id='about' className='lg:w-1/2'>
                <h1 className='text-6xl font-quicksandB m-10 flex lg:flex-row flex-col items-center'>About</h1>
                <p className='font-quicksand md:py-6 md:pl-20 text-xl sm:text-2xl md:text-[1.6rem] 2xl:text-3xl text-center lg:text-start'>For now it is only me, but my passion is to make apps and websites to make the world a better place, so if you would like to join the team, get something made or just want to cantact me jou can join the discord or send a mail</p>
              </section>

              <section id='skills'>
                <h1 className='text-6xl font-quicksandB m-10 flex lg:flex-row flex-col items-center'>Skills</h1>
                <div className='flex flex-wrap gap-4 justify-center'>
                  <div className='flex w-32 h-32 2xl:w-40 2xl:h-40 bg-gray-100 rounded-full p-5 justify-center items-center'>
                    <img src="skills/flutter.svg" alt="css" className='w-20 h-20 m-5 2xl:w-32 2xl:h-32' />
                  </div>
                  <div className='flex w-32 h-32 2xl:w-40 2xl:h-40 bg-gray-100 rounded-full p-5 justify-center items-center'>
                    <img src="skills/dart.svg" alt="css" className=' 2xl:w-28 2xl:h-28' />
                  </div>
                  <div className='flex w-32 h-32 2xl:w-40 2xl:h-40 bg-gray-100 rounded-full p-5 justify-center items-center'>
                    <img src="skills/tailwind.svg" alt="css" className='w-20 h-20 m-5 2xl:w-32 2xl:h-32' />
                  </div>
                  <div className='flex w-32 h-32 2xl:w-40 2xl:h-40 bg-gray-100 rounded-full p-5 justify-center items-center'>
                    <img src="skills/css.svg" alt="css" className=' 2xl:w-24 2xl:h-24' />
                  </div>
                  <div className='flex w-32 h-32 2xl:w-40 2xl:h-40 bg-gray-100 rounded-full p-5 justify-center items-center'>
                    <img src="skills/html.svg" alt="css" className=' 2xl:w-24 2xl:h-24' />
                  </div>
                </div>

              </section>
            </div>

            <div className='h-10 lg:h-32' />

            <section id='projects'>
              <h1 className='text-6xl font-quicksandB m-10'>Projects</h1>

              <div className='my-4 flex bg-gray-100 h-60 lg:h-80 w-full flex-row justify-between'>
                <div className='flex flex-row '>
                  <div className='bg-blue-600 w-2' />
                  <h1 className='text-5xl lg:text-7xl font-quicksand -rotate-90 ml-20 lg:ml-36'>2023</h1>
                  <div className='flex justify-center flex-col lg:gap-4 -ml-20 '>
                    <h1 className='font-quicksandB text-2xl sm:text-5xl lg:text-6xl 2xl:text-7xl'>Group Planner</h1>
                    <h2 className='font-quicksand text-xl sm:text-4xl lg:text-5xl'>A mobile app</h2>
                  </div>
                </div>
                <img src='app.svg' alt='app' className='m-4 hidden xl:flex'></img>
              </div>

              <div className='my-4 flex bg-gray-100 h-60 lg:h-80 w-full flex-row justify-between'>
                <div className='flex flex-row'>
                  <div className='bg-purple-600 w-2' />
                  <h1 className='text-5xl lg:text-7xl font-quicksand -rotate-90 ml-20 lg:ml-36'>2022</h1>
                  <div className='flex justify-center flex-col lg:gap-4 -ml-20'>
                    <h1 className='font-quicksandB text-2xl sm:text-5xl lg:text-6xl 2xl:text-7xl'>Blasix.com</h1>
                    <h2 className='font-quicksand text-xl sm:text-4xl lg:text-5xl'>This Website {': )'}</h2>
                  </div>
                </div>
                <img src='web.svg' alt='web' className='m-4 hidden xl:flex'></img>
              </div>
            </section>

            <div className='lg:h-32' />
          </div>
        </div>
      </main>

      <footer className='bg-gray-100 py-8 px-4 md:px-10 w-full overflow-hidden'>
        <div className='flex justify-center items-center sm:px-16 px-6'>
          <div className='xl:max-w-[1920px] w-full' >
            <a href='mailto: knock@blasix.com' className='flex pb-2 lg:pb-4 items-center text-3xl md:text-4xl lg:text-6xl font-quicksandB'>Knock@Blasix.com
              <span className=' text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-blue-800 px-4'>➜</span>
            </a>
            <li className='flex items-center font-quicksand text-xl lg:text-2xl gap-4 lg:gap-8'>
              <a href='#home'>Home</a>
              <a href='#about' >About </a>
              <a href='#skills'>Skills</a>
              <a href='#projects' >Projects </a>
            </li>
          </div>
        </div>
      </footer>

    </div>
  )
}
