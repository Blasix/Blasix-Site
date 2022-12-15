/* eslint-disable @next/next/no-img-element */
import Head from 'next/head'
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

      <main className='bg-white px-10'>

        <nav className='w-full flex py-6 mb-12 justify-between items-center text-2xl lg:text-3xl'>
          <h1 className='text-3xl md:text-4xl lg:text-6xl font-quicksandB text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-blue-800'>Blasix</h1>
          <ul className='hidden gap-4 lg:gap-8 list-none items-center font-quicksand md:flex '>
            <a href='#about' >About Us</a>
            <a href='#projects' >Our Projects</a>
          </ul>
          <a href='/contact' className='hidden px-4 py-2 font-quicksand md:flex'>Contact Me</a>
          <div className='md:hidden flex flex-1 justify-end items-center'>
            <img
              src={toggle ? 'close.svg' : 'menu.svg'}
              alt='menu'
              className='w-7 h-7 object-contain'
              onClick={() => setToggle((prev) => !prev)} />
            <div
              className={`${!toggle ? "hidden" : "flex"
                } p-6 absolute top-20 right-0 mx-4 my-2 min-w-[140px] rounded-xl bg-gradient-to-br from-gray-100 to-gray-300 sidebar`}>
              <ul className=' gap-4 lg:gap-8 list-none items-center flex-col font-quicksand flex '>
                <a href='#about' >About Us</a>
                <a href='#projects' >Our Projects</a>
                <a href='/contact' >Contact Me</a>
              </ul>

            </div>
          </div>

        </nav>
        <section className='min-h-screen'>
          <div className='text-start'>
            <h2 className='text-5xl py-8 md:pl-10 font-quicksandB md:text-7xl'>Mobile<br />Development</h2>
            <h3 className='font-quicksand md:py-6 md:pl-20 text-xl md:text-3xl'>Blasix is a company made by Bas,<br />to create the best innovations &<br />world class quality solutions</h3>
            <li className='flex py-6 md:pl-20 items-center font-quicksandB text-xl md:text-5xl' >
              <h1>Lets Talk </h1>
              <h1 className='text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-blue-800 px-4'> →</h1>
            </li>
            {/* <img src="Main.svg" alt="Main" /> */}
          </div>
        </section>
      </main>

      <footer className='bg-gray-100 py-8 px-4 md:px-10'>
        <li className='flex pb-2 lg:pb-4 items-center text-3xl md:text-4xl lg:text-6xl font-quicksandB'>
          <h1 >Knock@Blasix.com </h1>
          <h1 className='text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-blue-800 px-4'> →</h1>
        </li>
        <li className='flex items-center font-quicksand text-xl lg:text-2xl gap-4 lg:gap-8'>
          <a href='#'>About</a>
          <a href='#'>Services</a>
          <a href='#'>My Projects</a>
          <a href='#'>Insight</a>
        </li>
      </footer>

    </div>
  )
}
