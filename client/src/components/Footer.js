import {FaLinkedin,FaGithub} from "react-icons/fa";
import { chakra, Flex, Icon, useColorModeValue } from "@chakra-ui/react";

const Footer = () => {
  return (
    <Flex mx="-2">
      <Flex w="full" as="footer" flexDir={{ base: "column", sm: "row" }} align="center" justify="space-between" px="6" py="4" bg="white">
        {/* <chakra.a href="#" fontSize="xl" fontWeight="bold" color="pink.400">Morena </chakra.a> */}
        <chakra.p py={{ base: "2", sm: "0" }} color="pink.400">Developed by Oloyede samuel lekan, 19d/47xcs/00189... </chakra.p>

        <Flex mx="-2">
          {/* <chakra.a href="https://www.linkedin.com/in/bwooo/" target="_blank" m={2} color="gray.600" _hover={{color: "pink.400"}} aria-label="Linkedin">
            <Icon as={FaLinkedin} boxSize="5" viewBox="0 0 24 24" fill="currentColor"/>
          </chakra.a>

          <chakra.a href="https://github.com/anothermorena/Breast-Cancer-Classification" target="_blank" m={2} color="gray.600" _hover={{color: "pink.400"}} aria-label="Github">
            <Icon as={FaGithub} boxSize="5"  viewBox="0 0 24 24" fill="currentColor" />
          </chakra.a> */}
          
        </Flex>
      </Flex>
    </Flex>
  );
}


export default Footer;