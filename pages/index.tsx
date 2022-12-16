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
                <a href='#home'>Home</a>
                <a href='#about' >About</a>
                <a href='#projects' >Projects</a>
              </ul>
              <Link href='/contact' className='hidden px-4 py-2 font-quicksand md:flex'>Contact Me</Link>
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
                    <a href='#home' onClick={() => setToggle((prev) => !prev)}>Home</a>
                    <a href='#about' onClick={() => setToggle((prev) => !prev)}>About </a>
                    <a href='#projects' onClick={() => setToggle((prev) => !prev)}>Projects</a>
                    <Link href='/contact' onClick={() => setToggle((prev) => !prev)}>Contact Me</Link>
                  </ul>
                </div>
              </div>
            </nav>

            <section id='home' className='flex md:flex-row flex-col items-center'>
              <div className='flex flex-col items-center md:items-start '>
                <h2 className='text-5xl sm:text-6xl py-8 md:pl-10 font-quicksandB md:text-7xl 2xl:text-[5.5rem]'>Mobile<br />Development</h2>
                <h3 className='font-quicksand md:py-6 md:pl-20 text-xl sm:text-2xl md:text-[1.6rem] 2xl:text-3xl'>Blasix is a company made by Bas,<br />to create the best innovations &<br />world class quality solutions</h3>
                <h1 className='flex py-6 md:pl-20 items-center font-quicksandB text-xl sm:text-3xl md:text-5xl'>Lets Talk
                  <span className=' text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-blue-800 px-4'>➜</span>
                </h1>
                <div className=' md:py-10 self-center'>
                  <div className=' rounded-full  justify-center items-center w- w-20 h-20 md:w-32 md:h-32 rotate-90 bg-gray-500 p-[2px] cursor-pointer flex md:mr-4 mr-0'>
                    <div className='rounded-full flex justify-center items-center flex-col bg-primary w-[100%] h-[100%] bg-white '>
                      <p className="text-4xl text-gray-500">➜</p>
                    </div>
                  </div>
                </div>

              </div>

              <div className='flex-1 flex md:hidden lg:flex justify-end items-center md:my-0 my-10 relative'>
                <img src="home.svg" alt="home" className='w-[50rem] h-auto relative z-[5] pb-10' />
              </div>
            </section>



            <section id='about'>
              about
            </section>

            <section id='projects'>
              projects
            </section>


          </div>
        </div>
      </main>

      <footer className='bg-gray-100 py-8 px-4 md:px-10 w-full overflow-hidden'>
        <div className='flex justify-center items-center sm:px-16 px-6'>
          <div className='xl:max-w-[1920px] w-full' >
            <h1 className='flex pb-2 lg:pb-4 items-center text-3xl md:text-4xl lg:text-6xl font-quicksandB'>Knock@Blasix.com
              <span className=' text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-blue-800 px-4'>➜</span>
            </h1>
            <li className='flex items-center font-quicksand text-xl lg:text-2xl gap-4 lg:gap-8'>
              <a href='#home'>Home</a>
              <a href='#about' >About </a>
              <a href='#projects' >Projects </a>
            </li>
          </div>
        </div>
      </footer>

    </div>
  )
}
